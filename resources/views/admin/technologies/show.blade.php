@extends('layouts.admin')
@section('content')
<h2>{{$technology->name}}</h2>
<span class="mt-4">progetti con questa tecnologia:</span>
@forelse ($technology->projects as $project)
    <a href="{{route('admin.projects.show',$project->slug)}}">{{$project->title}}</a>
@empty
    nessun progetto trovato
@endforelse

@endsection