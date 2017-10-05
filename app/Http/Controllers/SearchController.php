<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyMap = [
            'kullanis' => 'KullanilisSekli',
            'yon' => 'Yon',
            'kat' => 'BulunduguKat',
            'oda' => 'OdaSayisi',
            'netM2Min' => ['BrutM2', '>='],
            'netM2Max' => ['BrutM2', '<='],
            'priceMin' => ['SatisDegeri', '>='],
            'priceMax' => ['SatisDegeri', '<='],
            'ada' => 'Ada',
            'parcel' => 'Parsel',
            'blok' => 'BlokNo',
            'kapiNo' => 'KapiNo',
            'sozlesme' => 'SozlesmeNo'
        ];
        $data = $request->all();
        $query = EstateProjectApartment::where('project_id', EstateProject::getCurrentProjectIdFromSession());
        ;
        foreach ($data as $key => $value) {
            if (isset($keyMap[$key])) {
                $condition = $keyMap[$key];
                if (is_array($condition)) {
                    $query->where($condition[0], $condition[1], $value);
                } else {
                    $query->where($condition, $value);
                }
            }
        }

        $apartments = $query->get();

        return view('sections.apartment_list', compact('apartments'));
    }
}
