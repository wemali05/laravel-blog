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


    public function create()
        {
            return view('projects.create');
        }

    public function edit($id)
    {
        $project=project::find($id);


        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
       $project= project::find($id);

       $project->tittle = request('tittle');
       $project->description = request('description');

       $project->save();

       return redirect('/projects');
    }

    public function destroy($id){
        $project= project::find($id);

        
       $project->tittle = request('tittle');
       $project->description = request('description');

       $project->save();

       return redirect('/projects');



    }

    public function store()
    {
        $project = new Project();

        $project->tittle= request('tittle');
        $project->description=request('description');

        $project->save();

        return redirect('/projects');
    }

 
}
