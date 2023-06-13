@extends('layouts.app')
@section('content')
    <form action="{{ route('admin.projects.store') }}" method="POST"   enctype="multipart/form-data" class="w-50 mt-4">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">add new title</label>
            <input type="text" class="form-control @if ($errors->any()) border-danger @endif" id="title"
                name="title" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger mb-4">
                    {{ $message }}
                </div>
            @enderror
            <label for="type">type:</label>
            <select name="type_id" id="type" class="mt-4 mb-4">
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}"@selected(old('type_id') == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>

            <div class="mb-5 mt-4">
           
                    <label for="image">inserisci img</label>
                    <input type="file" name="image" id="image">
               
            </div>
            <button type="submit" class="btn btn-primary">create new </button>
    </form>
@endsection
