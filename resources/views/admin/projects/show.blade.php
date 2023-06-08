@extends('layouts.admin')

@section('content')
    <h1 >{{ $project->title }}</h1>
    <p class="mt-4">tipologia del progetto:{{$project->type?->name}}</p>
  
    <p class="mt-4">{{ $project->description }}</p>

    {{-- perchè non risulta la relazione??? --}}
    @php
    dd($project)
@endphp
@endsection

