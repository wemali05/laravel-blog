@extends('layout')

@section('tittle', 'home_page')

@section('content')

<h1>Welcome to wemali.com</h1>
<h1>my {{ $foo}} website</h1>
<p>my first laravel</p>


<ul>
@foreach($tasks as $tasks)

      <li>{{ $tasks }}</li>

@endforeach
</ul>

@endsection
