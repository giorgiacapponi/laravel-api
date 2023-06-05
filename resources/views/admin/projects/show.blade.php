@extends('layouts.admin')

@section('content')
    <h1 >{{ $project->title }}</h1>
  
    <p class="mt-4">{{ $project->description }}</p>
@endsection