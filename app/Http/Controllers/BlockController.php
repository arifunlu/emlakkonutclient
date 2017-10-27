<?php

namespace App\Http\Controllers;

use App\Model\Block;
use App\Model\EstateProjectApartment;
use App\Model\Island;
use App\Model\Parcel;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function detail(EstateProjectApartment $apartment, ApartmentRepository $apartmentRepository)
    {
        $island = Island::getFromApartment($apartment);
        $parcel = Parcel::getFromApartment($apartment, $island);
        $block = Block::getFromApartment($apartment, $island, $parcel);
        $apartments = $block->getApartments();

        $kullanilisSekli = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnKullanilisSekli);
        $bulunduguKat = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnBulunduguKat);
        $odaSayisi = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnOdaSayisi);
        $yon = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnYon);
        $islands = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnIsland);
        $parcels = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnParcelNo);
        $blocks = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnBlockNo);
        $project = $parcel->estateProject;

        return view('block.detail',
            compact(
                'project',
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

    public function 360(EstateProjectApartment $apartment, ApartmentRepository $apartmentRepository)
    {
        $island = Island::getFromApartment($apartment);
        $parcel = Parcel::getFromApartment($apartment, $island);
        $block = Block::getFromApartment($apartment, $island, $parcel);
        $apartments = $block->getApartments();

        $kullanilisSekli = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnKullanilisSekli);
        $bulunduguKat = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnBulunduguKat);
        $odaSayisi = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnOdaSayisi);
        $yon = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnYon);
        $islands = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnIsland);
        $parcels = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnParcelNo);
        $blocks = $apartmentRepository->getBlockGroup($island, $parcel, $block,
            ApartmentRepository::columnBlockNo);
        $project = $parcel->estateProject;

        return view('360.detail',
            compact(
                'project',
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