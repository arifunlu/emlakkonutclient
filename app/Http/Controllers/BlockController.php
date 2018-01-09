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
        $data = compact('island', 'parcel', 'block');
        $apartments = $block->getApartments();

        $kullanilisSekli = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnKullanilisSekli);
        $bulunduguKat = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnBulunduguKat);
        $odaSayisi = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnOdaSayisi);
        $yon = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnYon);
        $islands = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnIsland);
        $parcels = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnParcelNo);
        $blocks = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnBlockNo);
        $numbering = $apartment->numbering;
        $project = $parcel->estateProject;

        return view(
            'block.detail',
            compact(
                'project',
                'parcel',
                'numbering',
                'kullanilisSekli',
                'bulunduguKat',
                'odaSayisi',
                'yon',
                'apartment',
                'apartments',
                'islands',
                'parcels',
                'blocks',
                'numbering'
            )
        );
    }

    public function block360(EstateProjectApartment $apartment, ApartmentRepository $apartmentRepository)
    {
        $island = Island::getFromApartment($apartment);
        $parcel = Parcel::getFromApartment($apartment, $island);
        $block = Block::getFromApartment($apartment, $island, $parcel);
        $data = compact('island', 'parcel', 'block');
        $apartments = $block->getApartments();

        $kullanilisSekli = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnKullanilisSekli);
        $bulunduguKat = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnBulunduguKat);
        $odaSayisi = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnOdaSayisi);
        $yon = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnYon);
        $islands = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnIsland);
        $parcels = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnParcelNo);
        $blocks = $apartmentRepository->getBlockGroup($data, ApartmentRepository::columnBlockNo);
        $project = $parcel->estateProject;

        return view(
            'block360.detail',
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