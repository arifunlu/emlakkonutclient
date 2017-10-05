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
            'netM2Min' => ['NetM2', '>='],
            'netM2Max' => ['NetM2', '<='],
            'fiyatMin' => ['SatisDegeri', '>='],
            'fiyatMax' => ['SatisDegeri', '<='],
            'ada' => 'Ada',
            'parcel' => 'Parsel',
            'blok' => 'BlokNo',
            'kapiNo' => 'KapiNo',
            'sozlesme' => 'SozlesmeNo'
        ];

        $data = $request->get('data', []);
        $query = EstateProjectApartment::where('project_id', EstateProject::getCurrentProjectIdFromSession());
        foreach ($data as $key => $value) {
            if(isset($keyMap[$key])) {
                $condition = $keyMap[$key];
                if(is_array($condition)) {
                    $query->where($condition[0], $condition[1], $value);
                } else {
                    $query->where($condition, $value);
                }
            }
        }

        return $query->get()->toArray();
    }
}
