<?php

namespace App\Repositories;

use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use DB;

/**
 * App\Repositories\ApartmentRepository
 *
 * @property int $id
 * @property int|null $project_id
 * @property string|null $Il
 * @property string|null $Ilce
 * @property string|null $Ada
 * @property string|null $Parsel
 * @property string|null $BlokNo
 * @property string|null $KapiNo
 * @property string|null $KullanilisSekli
 * @property string|null $BulunduguKat
 * @property string|null $OdaSayisi
 * @property string|null $Yon
 * @property string|null $NetM2
 * @property string|null $AcikNetM2
 * @property string|null $BrutM2
 * @property string|null $Eklenti1Nitelik
 * @property string|null $Eklenti1NetM2
 * @property string|null $Eklenti1BrutM2
 * @property string|null $Eklenti2Nitelik
 * @property string|null $Eklenti2NetM2
 * @property string|null $Eklenti2BrutM2
 * @property string|null $Eklenti3Nitelik
 * @property string|null $Eklenti3NetM2
 * @property string|null $Eklenti3BrutM2
 * @property string|null $Eklenti4Nitelik
 * @property string|null $Eklenti4NetM2
 * @property string|null $Eklenti4BrutM2
 * @property string|null $Eklenti5Nitelik
 * @property string|null $Eklenti5NetM2
 * @property string|null $Eklenti5BrutM2
 * @property string|null $GayrimenkulDurumu
 * @property string|null $SatisDegeri
 * @property string|null $SozlesmeNo
 * @property string|null $MusteriAdi
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereAcikNetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereAda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereBlokNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereBrutM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereBulunduguKat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti1BrutM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti1NetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti1Nitelik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti2BrutM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti2NetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti2Nitelik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti3BrutM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti3NetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti3Nitelik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti4BrutM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti4NetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti4Nitelik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti5BrutM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti5NetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereEklenti5Nitelik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereGayrimenkulDurumu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereIl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereIlce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereKapiNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereKullanilisSekli($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereMusteriAdi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereNetM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereOdaSayisi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereParsel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereSatisDegeri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereSozlesmeNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repositories\ApartmentRepository whereYon($value)
 * @mixin \Eloquent
 */
class ApartmentRepository
{
    public $apartment;

    public function __construct(EstateProjectApartment $apartment)
    {
        $this->apartment = $apartment;
    }

    public function KullanilisSekli()
    {
        return $this->myGroup('KullanilisSekli');
    }

    public function BulunduguKat()
    {
        return $this->myGroup('BulunduguKat');
    }

    public function OdaSayisi()
    {
        return $this->myGroup('OdaSayisi');
    }

    public function Yon()
    {
        return $this->myGroup('Yon');
    }

    public function BrutM2()
    {
        return $this->myGroup('BrutM2');
    }

    public function netM2Group()
    {
        $groupRange = 10;
        $result = [];
        $max = $this->apartment->where('project_id', EstateProject::getCurrentProjectIdFromSession())->max('NetM2');
        $min = $this->apartment->where('project_id', EstateProject::getCurrentProjectIdFromSession())->min('NetM2');
        $maxRound = ceil($max / $groupRange) * $groupRange;

        for ($minRound = floor($min / $groupRange) * $groupRange; $minRound < $maxRound; $minRound += $groupRange) {
            $result[] = [$minRound, $minRound + $groupRange];
        }

        return $result;
    }

    public function priceGroup()
    {
        $groupRange = 50000;
        $result = [];
        $max = (int)$this->apartment->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->max('SatisDegeri');
        $min = (int)$this->apartment->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->min('SatisDegeri');
        $maxRound = ceil($max / $groupRange) * $groupRange;

        for ($minRound = floor($min / $groupRange) * $groupRange; $minRound < $maxRound; $minRound += $groupRange) {
            $result[] = [$minRound, $minRound + $groupRange];
        }

        return $result;
    }

    public function islandGroup()
    {
        return $this->myGroup('Ada');
    }

    public function parcelGroup()
    {
        return $this->myGroup('Parsel');
    }

    public function blockGroup()
    {
        return $this->myGroup('BlokNo');
    }

    public function floorGroup()
    {
        return $this->myGroup('KapiNo');
    }

    public function contractGroup()
    {
        return $this->myGroup('SozlesmeNo');
    }

    private function myGroup($columnName) {
        return $this->apartment->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()->get([$columnName])->pluck($columnName);
    }
}