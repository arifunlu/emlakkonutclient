<?php

namespace App\Http\Controllers;

use App\Model\EstateProjectApartment;
use App\Model\Island;
use App\Model\Parcel;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    public function detail(Parcel $parcel, ApartmentRepository $apartmentRepository)
    {
        $island = Island::find($parcel->island_id);
        $apartments = $parcel->getApartments();
        $kullanilisSekli = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnKullanilisSekli);
        $bulunduguKat = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnBulunduguKat);
        $odaSayisi = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnOdaSayisi);
        $yon = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnYon);
        $islands = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnIsland);
        $parcels = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnParcelNo);
        $blocks = $apartmentRepository->getParcelGroup($island, $parcel,
            ApartmentRepository::columnBlockNo);
        $project = $parcel->estateProject;

        return view('parcel.detail',
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
