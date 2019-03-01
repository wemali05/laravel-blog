@extends('layout')


@section('title', 'projects')

@section('content')

<h1>Projects</h1>
<ul>
    @foreach($projects as $project)
    <li>
        <a href="/projects/{{$project->id}}"> 
           {{ $project->tittle }}
        </a>
     </li>
    @endforeach
</ul>
       
@endsection

