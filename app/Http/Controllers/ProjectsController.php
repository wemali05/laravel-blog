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
       
    
    public function show(Project $project)
    {
         return view('projects.show', compact('project'));
    }


    public function create()
        {
            return view('projects.create');
        }
    

    public function edit(Project $project)
    {

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
   
    {
       $project->tittle = request('tittle');
       $project->description = request('description');

       $project->save();

       return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function store()
    {
        Project::create([
            'tittle' => request('tittle'),
            'description' => request('description')
        ]);
       

        return redirect('/projects');
    }

 
}
