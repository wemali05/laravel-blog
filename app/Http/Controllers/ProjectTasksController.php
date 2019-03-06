<?php

namespace App\Http\Controllers;

use App\Task;

use App\Project;

use Illuminate\Http\Request;

use Validator;

use App\Http\Controllers\Controller;

class ProjectTasksController extends Controller
{
     

    public function store( Project $project,Request $request)
    {
       $this->validate($request,[
       
        'description' => ['required']
        ]);
        $project->addTask(request('description'));

        return back();
    }


//    public function update(Task $task, Request $request)
//    {    
//         if(request()->has('completed')){
//             $task->completed();
//         } else {
//             $task->incomplete();
//         }
// or
    //    $task->complete(request()->has('completed'));
    // or

    
    // $request->has('completed') ? $task->complete() : $task->incomplete();
    // or

    // $method= request()->has('completed') ? 'complete' : 'incomplete';

    // $task->$method();
  

//        return back();
//    }

 
}
