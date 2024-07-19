@extends('layouts.admin') 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div>
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-100" style="max-width: 200px;">
                </div>
            </div>
            <div class="col-md-6">
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
        </div>
    </div>
@endsection



