<?php

namespace App\Http\Controllers;

use App\Project;

use App\Mail\ProjectCreated;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProjectsController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    

    public function index( )
    {

    //   $project = auth()->user()->projects;
       $project = Project::where('owner_id', auth()->id())->get();
        //  return $projects;

       

        return view ('projects.index', compact('project'));
    }
       
    
    public function show(Project $project)
    { 
        // // abort_if(! auth()-user()->owns($project), 403);
        // abort_if($project->owner_id !== auth()->id(), 403);
        $this->authorize('view', $project);

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
        $this->authorize('update', $project);

       $project->update(request(['tittle', 'description']));

       return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $this->authorize('destroy', $project);

   $project->delete(request(['tittle', 'description']));
        // $project->delete();

        return redirect('/projects');
    }

    public function store(Request $request, Project $project)
    {
       $attributes=request()->validate([
            'tittle' => ['required', 'min:5', 'max:100'],
            'description' => ['required', 'min:5', 'max:100']
        ]);

        $attributes['owner_id'] = auth()->id();
         
        $Project=Project::create($attributes);


        \Mail::to($project->user->email)->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');

    }

 
}
