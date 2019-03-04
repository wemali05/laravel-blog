@extends('layout')

@section('content')

    <h1>{{$project->tittle}}</h1>
    <div>{{$project->description}}</div>

    <p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
    </p>

    @if($project->tasks->count())
        <div class="box" >
        @foreach ($project->tasks as $task)
            <div>
               <form method="POST" action="/tasks/{{ $task->id}}" >

                    {{method_field('PATCH')}}
                    {{csrf_field()}}

                        <label class="checkbox {{$task->completed ? 'is-complete': ''}} " for="completed" >
                            <input  type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked': ''}}>
                             {{$task->description}}
                        </label>

                </form> 
            </div>
     @endforeach

        </div>
    @endif

    <form method="POST" class="box" action="/projects/{{$project->id}}/tasks">
        {{csrf_field()}}
        
        <div class="field">
            <label for="description" class="label">New Task</label>
                <div class="control">
                    <input type="text" name="description" class="input" placeholder="New Task">
                </div>
        </div>
        <div class="field">
            <div class="control">
                    <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
    
    </form>
    
@endsection