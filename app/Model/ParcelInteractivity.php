<?php

namespace App\Model;

use App\Designer\Designer;
use App\Model\Parcel;
use App\Model\ParcelPhoto;
use Illuminate\Database\Eloquent\Model;

/**
 * \App\Model\ParcelInteractivity
 *
 * @property int $id
 * @property int $parcel_id
 * @property string $interactiveJson
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereInteractiveJson($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereParcel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Model\Parcel $parcel
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ParcelInteractivity whereParcelId($value)
 * @property-read \App\Model\ParcelPhoto $parcelPhoto
 */
class ParcelInteractivity extends Model {

    protected $table = 'parcel_interactivity';

    public function updateImage()
    {
        if ($this->parcelPhoto)
        {
            $url = $this->parcelPhoto->getImageUrl();
            $jsonData = Designer::updateImage(json_decode($this->interactiveJson), $url);
            $this->interactiveJson = json_encode($jsonData);
            $this->save();
        }
    }

    public function parcelPhoto() {
        return $this->hasOne(ParcelPhoto::class, 'parcel_id', 'parcel_id');
    }

    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id');
    }


}
