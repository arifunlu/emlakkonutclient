<?php

namespace App\Repositories;

use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use DB;

class ApartmentRepository extends EstateProjectApartment
{
    private function KullanilisSekli() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct('KullanilisSekli')
            ->get(['KullanilisSekli']);
    }

    private function BulunduguKat() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['BulunduguKat']);
    }

    private function OdaSayisi() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['OdaSayisi']);
    }

    private function Yon() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['Yon']);
    }

    private function BrutM2()
    {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['BrutM2']);
    }

    public function getSearchColumns()
    {
        return [
            'Kullanılış Şekli' => $this->KullanilisSekli(),
            'Bulunduğu Kat' => $this->BulunduguKat(),
            'Oda Sayısı' => $this->OdaSayisi(),
            'Yön' => $this->Yon(),
            'Brüt Metrekare' => $this->BrutM2()

        ];
    }

}