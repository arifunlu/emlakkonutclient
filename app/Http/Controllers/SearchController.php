<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function index()
    {
        $estateProject = EstateProject::find(1);
        return $estateProject->EstateProjectApartment;
    }
}
