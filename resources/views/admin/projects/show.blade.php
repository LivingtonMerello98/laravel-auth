@extends('layouts.admin') 

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p><strong>Languages:</strong> {{ $project->languages }}</p>
    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
