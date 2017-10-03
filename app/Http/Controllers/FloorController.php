<?php

namespace App\Http\Controllers;

use App\Model\Block;
use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use App\Model\Floor;
use App\Model\Island;
use App\Model\Parcel;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class FloorController extends Controller
{

    public function detail(EstateProjectApartment $apartment, ApartmentRepository $apartmentRepository)
    {
        $kullanilisSekli = $apartmentRepository->KullanilisSekli();
        $bulunduguKat = $apartmentRepository->BulunduguKat();
        $odaSayisi = $apartmentRepository->OdaSayisi();
        $yon = $apartmentRepository->Yon();
        $project = EstateProject::find($apartment->project_id);
        $island = Island::getIslandFromIslandKkys($apartment->Ada);
        $parcel = Parcel::getParcel($island->id, $apartment->Parsel);
        $block = Block::getBlock($island->id, $parcel->id, $apartment->BlokNo);
        $floor = Floor::getFloor($island->id, $parcel->id, $block->id, $apartment->BulunduguKat);

        return view('parcel.detail',
            compact('project', 'parcel', 'kullanilisSekli', 'bulunduguKat', 'odaSayisi', 'yon', 'apartment', 'floor')
        );
    }
}
