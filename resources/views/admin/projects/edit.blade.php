@extends('layouts.app')
@section('content')
    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST" enctype="multipart/form-data"  class="w-50 mt-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">add new title</label>
            <input type="text" class="form-control @if ($errors->any()) border-danger @endif" id="title"
                name="title" value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="alert alert-danger mb-4 w-25">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="type">type:</label>
        <select name="type_id" id="type" class="mt-4 mb-4">
            <option value=""></option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}"@selected($type->id == old('type_id',$project->type?->id))>{{ $type->name }}</option>
            @endforeach
        </select>
        <div class="mb-2 mt-4">
           
            <label for="image">inserisci o modifica  img</label>
            <input type="file" name="image" id="image">
       
    </div>
    @if ($project->image)
        <img  class="w-25 mb-5" src="{{asset('storage/' .$project->image)}}" alt="">
        
    @endif
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $project->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">edit now </button>
    </form>
@endsection
