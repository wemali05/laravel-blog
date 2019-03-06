<?php

namespace App\Http\Controllers;

use App\Project;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProjectsController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    

    public function index( )
    {
       $project = Project::where('owner_id', auth()->id())->get();
        //  return $projects;

        return view ('projects.index', compact('project'));
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
       $project->update(request(['tittle', 'description']));

       return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
            'tittle' => ['required', 'min:5', 'max:100'],
            'description' => ['required', 'min:5', 'max:100']
        ]);
         
        Project::create(request(['tittle', 'description']) + ['owner_id'=>auth()->id()]);

        return redirect('/projects');
    }

 
}
