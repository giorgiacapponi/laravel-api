@extends('layouts.admin')
@section('content')
{{$technology->name}}
    
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">type</th>
            <th scope="col">Slug</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{$project->type?->name}}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{route('admin.projects.destroy',$project->slug)}}"method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button"class="btn btn-danger delete "><i class="fa-solid fa-trash"></i></button>
                    </form>
                    
                    
                </td>
            </tr>
  
    </tbody>
</table>
@endsection