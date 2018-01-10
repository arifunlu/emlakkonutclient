<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Model\ProjectLocation;
use Illuminate\Http\Request;

class MapController extends Controller
{

    public function index()
    {
        $project = EstateProject::getCurrentProjectFromSession();
        $location = ProjectLocation::getByProjectID($project);

        return view('map.index', compact('location', 'project'));
    }
}
