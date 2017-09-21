<?php

namespace App\Repositories;

use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use DB;

class ApartmentRepository extends EstateProjectApartment
{
    public function KullanilisSekli() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['KullanilisSekli'])->pluck('KullanilisSekli');
    }

    public function BulunduguKat() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['BulunduguKat'])->pluck('BulunduguKat');
    }

    public function OdaSayisi() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['OdaSayisi'])->pluck('OdaSayisi');
    }

    public function Yon() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['Yon'])->pluck('Yon');
    }

    public function BrutM2()
    {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['BrutM2'])->pluck('BrutM2');
    }
}