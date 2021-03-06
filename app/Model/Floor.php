<?php

namespace App\Model;

use App\Designer\Designer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

/**
 * App\Model\Floor
 *
 * @property int $id
 * @property int $project_id
 * @property int $island_id
 * @property int $parcel_id
 * @property int $block_id
 * @property string $floor_numbering
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Model\Block $block
 * @property-read \App\Model\FloorInteractivity $floorInteractivity
 * @property-read \App\Model\FloorPhoto $floorPhoto
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereBlockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereFloorNumbering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereIslandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereParcelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $floor_no
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Floor whereFloorNo($value)
 */
class Floor extends Model
{
    protected $table = 'floor';

    private static function parseFileName($filename = "")
    {
        //        $filename = "1358_3_{D-(A GİRİŞ)_D-(B GİRİŞ)_D}_0_1_2_3_4_5_6_7_8_9_10";
        //        $filename = "1358_3_D-(A GİRİŞ)_0_1_2_3_4_5_6_7_8_9_10";
        $fileStructure = explode('_', $filename);

        if (count($fileStructure) < 4) {
            throw new \Exception("Geçersiz imaj ismi");
        }

        $i = 2;
        $block = [];
        $floors = [];
        $result['islandKkys'] = $fileStructure[0];
        $result['parcelKkysId'] = $fileStructure[1];
        if (Str::startsWith($fileStructure[2], '{')) {
            for (; $i < count($fileStructure); $i++) {
                $block[] = trim($fileStructure[$i], '\t\n\r {} ');
                if (Str::endsWith($fileStructure[$i], '}')) {
                    $i++;
                    break;
                }
            }
            for (; $i < count($fileStructure); $i++) {
                $floors[] = trim($fileStructure[$i]);
            }
        } else {
            $block[] = trim($fileStructure[2]);
            for ($i = 3; $i < count($fileStructure); $i++) {
                $floors[] = trim($fileStructure[$i]);
            }
        }

        $result['blocks'] = $block;
        $result['floors'] = $floors;

        return $result;
    }

    /**
     * @param $filename
     * @return static[]
     */
    public static function findFloorsFromFileName($filename)
    {
        $parsedInfo = self::parseFileName($filename);

        $projectId = EstateProject::getCurrentProjectIdFromSession();
        $island = Island::getIslandFromIslandKkys($parsedInfo['islandKkys']);
        $parcel = Parcel::getParcel($island->id, $parsedInfo['parcelKkysId']);
        $blocks = [];
        $floors = [];
        foreach ($parsedInfo['blocks'] as $blockKkysName) {
            $blocks[] = Block::getBlock($island->id, $parcel->id, $blockKkysName);
        }

        foreach ($blocks as $block) {
            foreach ($parsedInfo['floors'] as $kkysFloors) {
                $floorNo = FloorMapping::getEagerFloorNo($kkysFloors);
                $floor = Floor::where('project_id', $projectId)
                    ->where('island_id', $island->id)
                    ->where('parcel_id', $parcel->id)
                    ->where('block_id', $block->id)
                    ->where('floor_no', $floorNo)
                    ->first();

                if ($floor) {
                    $floors[] = $floor;
                }
            }
        }

        return $floors;
    }

    public static function setFloorPhoto(EstateProject $project, UploadedFile $photo)
    {
        //proje - ada-parcel-block-kapi diye bakilmali...
        // 1- parse the name ok
        // 2- find the floor ok
        // 3- check if floorPhoto is exits ??
        // 4- save the new photo
        // 5- move it to the place
        // 6- change the photoUrl to new url

        //name formula...

        $filename = $photo->getClientOriginalName();
        try {
            $floors = self::findFloorsFromFileName($filename);

            foreach ($floors as $floor) {
                $floor->setPhoto($photo);
            }
        } catch (\Exception $exception) {
            return \Redirect::back()->withErrors($exception->getMessage());
        }
    }

    private function setPhoto(UploadedFile $file)
    {
        if (!$this->floorPhoto) {
            $this->floorPhoto = new floorPhoto();
        }
        $this->floorPhoto->floor_id = $this->id;
        $this->floorPhoto->name = $file->getFilename() . '.jpg';
        $this->floorPhoto->thumbnail = $file->getFilename() . '_thumb.jpg';
        $this->floorPhoto->size = $file->getSize();
        $this->floorPhoto->original_name = $file->getClientOriginalName();

        $image = \Image::make($file->getRealPath());
        $image->widen(50);
        $image->save(FloorPhoto::directory() . $file->getFilename() . '_thumb.jpg');

        $image = \Image::make($file->getRealPath());
        $image->widen(1280);
        $image->save(FloorPhoto::directory() . $file->getFilename() . '.jpg');

        $this->floorPhoto->width = $image->width();
        $this->floorPhoto->height = $image->height();
        $this->floorPhoto->save();

        if ($this->floorInteractivity) {
            //change the image url in the json data.
            $this->floorInteractivity->updateImage();
            $this->floorInteractivity->save();
        }
    }

    public function floorPhoto()
    {
        return $this->hasOne(FloorPhoto::class, 'floor_id');
    }

    public function block()
    {
        return $this->belongsTo(Block::class, 'block_id');
    }

    public function floorInteractivity()
    {
        return $this->hasOne(FloorInteractivity::class, 'floor_id');
    }

    public function initInteractivity()
    {
        if (!$this->floorInteractivity) {
            $this->floorInteractivity = new FloorInteractivity();
        }

        $designer = new Designer($this);
        $this->floorInteractivity->floor_id = $this->id;
        $this->floorInteractivity->interactiveJson = $designer->getJson();
        $this->floorInteractivity->save();
    }

    /**
     * @param $islandId
     * @param $parcelId
     * @param $blockId
     * @param $floorNumbering
     * @return Floor
     * @throws \Exception
     */
    public static function getFloor($islandId, $parcelId, $blockId, $floorNumbering)
    {
        $projectId = EstateProject::getCurrentProjectIdFromSession();
        $result = static::where('project_id', $projectId)
            ->where('island_id', $islandId)
            ->where('parcel_id', $parcelId)
            ->where('block_id', $blockId)
            ->where('floor_numbering', $floorNumbering)
            ->first();

        if (!$result) {
            throw new \Exception(
                'Aranılan isimde bir Floor bulunamadı' .
                ' project_id: ' . $projectId .
                ' island_id: ' . $islandId .
                ' parcel_id: ' . $parcelId .
                ' block_id: ' . $blockId .
                ' floor_numbering: ' . $floorNumbering
            );
        }

        return $result;
    }
}
