@extends('layout')

@section('content')

    <h1>{{$project->tittle}}</h1>
    <div>{{$project->description}}</div>

    <p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
    </p>

    @if($project->tasks->count())
        <div>
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
    
@endsection