<?php

namespace App\Http\Controllers;

use App\Model\Block;
use App\Model\EstateProjectApartment;
use App\Model\Floor;
use App\Model\FloorInteractivity;
use App\Model\Island;
use App\Model\Parcel;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function detail(EstateProjectApartment $apartment)
    {
        $island = Island::getFromApartment($apartment);
        $parcel = Parcel::getFromApartment($apartment, $island);
        $block = Block::getFromApartment($apartment, $island, $parcel);
        $floor = Floor::getFloor($island->id, $parcel->id, $block->id, $apartment->BulunduguKat);
        $interactiveObject = $floor->floorInteractivity
            ? $floor->floorInteractivity->interactiveJson
            : json_encode(false);

        $apartments = [$apartment];

        $kullanilisSekli = [$apartment->KullanilisSekli];
        $bulunduguKat = [$apartment->BulunduguKat];
        $odaSayisi = [$apartment->OdaSayisi];
        $yon = [$apartment->Yon];
        $islands = [$apartment->Ada];
        $parcels = [$apartment->Parsel];
        $blocks = [$apartment->BlokNo];
        $project = $parcel->estateProject;

        return view(
            'apartment.detail',
            compact(
                'project',
                'apartment',
                'interactiveObject',
                'floor',
                'parcel',
                'kullanilisSekli',
                'bulunduguKat',
                'odaSayisi',
                'yon',
                'apartments',
                'islands',
                'parcels',
                'blocks'
            )
        );
    }
}
