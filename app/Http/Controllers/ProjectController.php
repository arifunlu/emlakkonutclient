<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = EstateProject::get();

        return view('project.list', compact('projects'));
    }

    public function detail(EstateProject $project, ApartmentRepository $apartment)
    {
        EstateProject::setSession($project->id);

        $kullanilisSekli = $apartment->KullanilisSekli();
        $bulunduguKat = $apartment->BulunduguKat();
        $odaSayisi = $apartment->OdaSayisi();
        $yon = $apartment->Yon();

        return view('project.detail',
            compact('project', 'kullanilisSekli', 'bulunduguKat', 'odaSayisi', 'yon', 'apartments'));
    }


}
