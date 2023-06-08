@extends('layouts.admin')
@section('content')
<h2>{{$technology->name}}</h2>
@forelse ($technology->projects as $project)
    {{$project->title}}
@empty
    nessun progetto trovato
@endforelse

@endsection