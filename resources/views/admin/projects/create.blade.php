@extends('layouts.app')
@section('content')
<form action="{{route('admin.projects.store')}}" method="POST" class="w-50 mt-4">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">add new title</label>
        <input type="text" class="form-control @if ($errors->any()) border-danger @endif" id="title" name="title" value="{{old('title')}}">
        @error('title')
                <div class="alert alert-danger mb-4">
                    {{ $message }}
                </div>
            @enderror
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" rows="3" name="description">{{old('description')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">create new </button>
</form>


  
@endsection

