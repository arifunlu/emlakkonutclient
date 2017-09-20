<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Model\ProjectLocation;
use Illuminate\Http\Request;

class MapController extends Controller
{

    public function index()
    {
        $projectId = EstateProject::getCurrentProjectIdFromSession();
        $location = ProjectLocation::getByProjectID($projectId);
        return view('map.index', compact('location'));
    }
}
