<?php

namespace App\Http\Controllers;

use App\Model\Parcel;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class ParcelController extends Controller
{

    public function detail(Parcel $parcel, ApartmentRepository $apartment)
    {
        $kullanilisSekli = $apartment->KullanilisSekli();
        $bulunduguKat = $apartment->BulunduguKat();
        $odaSayisi = $apartment->OdaSayisi();
        $yon = $apartment->Yon();
        $apartments = $parcel->getApartments();
        $project = $parcel->estateProject;

        return view('parcel.detail',
            compact('project', 'parcel', 'kullanilisSekli', 'bulunduguKat', 'odaSayisi', 'yon', 'apartments')
        );
    }

}
