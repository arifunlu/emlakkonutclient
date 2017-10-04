<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Repositories\ApartmentRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = EstateProject::orderBy('ProjeAdi')->get();

        return view('project.list', compact('projects'));
    }

    public function detail(EstateProject $project, ApartmentRepository $apartment)
    {
        EstateProject::setSession($project->id);

        $kullanilisSekli = $apartment->KullanilisSekli();
        $bulunduguKat = $apartment->BulunduguKat();
        $odaSayisi = $apartment->OdaSayisi();
        $yon = $apartment->Yon();
        $islands = $apartment->islandGroup();
        $parcels = $apartment->parcelGroup();
        $blocks = $apartment->blockGroup();
        $apartments = $project->EstateProjectApartment;

        return view('project.detail',
            compact(
                'project',
                'apartments',
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
