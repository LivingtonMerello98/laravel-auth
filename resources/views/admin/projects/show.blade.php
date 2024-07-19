@extends('layouts.admin') 

@section('content')
    <div class="container">
        <h3 class="text-white text-uppercase">{{ $project->title }}</h3>
    <p class="text-white">{{ $project->description }}</p>
    <p class="text-white"><strong>Languages:</strong> {{ $project->languages }}</p>
    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning rounded-1">
        <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
    </a>
    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger rounded-1">
            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
        </button>
    </form>
    </div>
@endsection
