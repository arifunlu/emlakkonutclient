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
            ->get(['KullanilisSekli']);
    }

    public function BulunduguKat() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['BulunduguKat']);
    }

    public function OdaSayisi() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['OdaSayisi']);
    }

    public function Yon() {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['Yon']);
    }

    public function BrutM2()
    {
        return DB::table($this->table)
            ->where('project_id', EstateProject::getCurrentProjectIdFromSession())
            ->distinct()
            ->get(['BrutM2']);
    }

}