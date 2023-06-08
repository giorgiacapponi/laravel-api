@extends('layouts.admin')

@section('content')
    <h1>technologies</h1>
    <ul>
        @foreach ($technologies as $technology) 
        <li><a href="{{route('admin.technologies.show',$technology->slug)}}">{{$technology->name}}</a></li>
        @endforeach
    </ul>
@endsection