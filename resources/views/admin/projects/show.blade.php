@extends('layouts.admin')

@section('content')
    <h1 >{{ $project->title }}</h1>
    @if($project->image)
    <img src="{{asset('storage/'.$project->image)}}" alt="cia">
    @endif
    <p class="mt-4">tipologia del progetto:{{$project->type?->name}}</p>
  
    <p class="mt-4">descrizione:{{ $project->description }}</p>
    <span class="mt-4">tecnologie usate:</span>
@forelse ($project->technologies as $technology)
{{$technology->name}}
@empty
    non presenti
@endforelse
   
@endsection
