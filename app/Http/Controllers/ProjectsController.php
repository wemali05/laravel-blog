<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects =Project::all();
        //  return $projects;

        return view ('projects.index', compact('projects'));
    }


    public function create(){
        return view('projects.create');
    }

}
