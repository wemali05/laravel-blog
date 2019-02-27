@extends('layout')


@section('title', 'projects')

@section('content')



    @foreach($projects as $project)

       <li> {{ $project->tittle }}</li>
       <li>{{$project->description}}</li>
      
    @endforeach
@endsection