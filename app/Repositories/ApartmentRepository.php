<?php

namespace App\Repositories;

use App\Model\Block;
use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use App\Model\Island;
use App\Model\Parcel;

class ApartmentRepository
{
    public $apartment;
    const columnSozlesmeNo = 'SozlesmeNo';
    const columnKapiNo = 'KapiNo';
    const columnBlockNo = 'BlokNo';
    const columnParcelNo = 'Parsel';
    const columnIsland = 'Ada';
    const columnBrutM2 = 'BrutM2';
    const columnYon = 'Yon';
    const columnOdaSayisi = 'OdaSayisi';
    const columnBulunduguKat = 'BulunduguKat';
    const columnKullanilisSekli = 'KullanilisSekli';

    public function __construct(EstateProjectApartment $apartment)
    {
        $this->apartment = $apartment;
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

    private function myGroup($columnName)
    {
        return $this->apartment
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->where($columnName, '!=', '')
            ->distinct()
            ->get([$columnName])
            ->pluck($columnName);
    }

    public function getParcelGroup(Island $island, Parcel $parcel, $columnName)
    {
        return $this->apartment
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->where('Ada', $island->island_kkys)
            ->where('Parsel', $parcel->parcel)
            ->where($columnName, '!=', '')
            ->distinct()
            ->get([$columnName])
            ->pluck($columnName);
    }

    public function getBlockGroup($groupData, $columnName)
    {
        $island = $groupData['island'];
        $parcel = $groupData['parcel'];
        $block = $groupData['block'];
        return $this->apartment
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->where('Ada', $island->island_kkys)
            ->where('BlokNo', $block->block_no)
            ->where('Parsel', $parcel->parcel)
            ->where($columnName, '!=', '')
            ->distinct()
            ->get([$columnName])
            ->pluck($columnName);
    }
}