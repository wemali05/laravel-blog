@extends('layout')


@section('title', 'projects')

@section('content')

<h1>Projects</h1>

    @foreach($projects as $project)

       <li> {{ $project->tittle }}</li>
       
      
    @endforeach
@endsection

