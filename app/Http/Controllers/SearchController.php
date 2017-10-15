<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Model\EstateProjectApartment;
use Illuminate\Http\Request;
use View;

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
            'brutM2Min' => ['BrutM2', '>='],
            'brutM2Max' => ['BrutM2', '<='],
            'priceMin' => ['SatisDegeri', '>='],
            'priceMax' => ['SatisDegeri', '<='],
            'ada' => 'Ada',
            'parcel' => 'Parsel',
            'blok' => 'BlokNo',
            'kapiNo' => ['KapiNo', '='],
            'sozlesme' => ['SozlesmeNo', '=']
        ];
        $data = $request->all();
        $query = EstateProjectApartment::where('project_id', EstateProject::getCurrentProjectIdFromSession());

        foreach ($data as $key => $valueSet) {
            if (isset($keyMap[$key])) {
                $condition = $keyMap[$key];
                if (is_array($condition)) {
                    $value = $valueSet;
                    if ($value !== null) {
                        $query->where($condition[0], $condition[1], $value);
                    }
                } else {
                    $query->where(function ($query) use ($valueSet, $condition) {
                        foreach ($valueSet as $value) {
                            $query->orWhere($condition, $value);
                        }
                    });
                }
            }
        }

        $apartments = $query->get();
        $response = [];
        $response['html'] = View::make('sections.apartment_list', compact('apartments'))->render();
        $response['activeBlocks'] = array_unique($apartments->pluck('BlokNo')->toArray());
        return $response;
    }
}
