@extends('layouts.admin') 

@section('content')
    <h3 class="text-white">Edit Project</h3>

    <div>
        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-100" style="max-width: 50px; min-width: 50px;">
    </div>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3">
            <label for="url" class="text-white">Url del sito</label>
            <input type="text" name="url" id="url" class="form-control" value="{{ $project->url }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="image" class="text-white">Immagine del sito</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ $project->image }}" required>
        </div>


        <div class="form-group mb-3">
            <label for="title" class="text-white">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description" class="text-white">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="languages" class="text-white">Languages</label>
            <select class="form-control" id="languages" name="languages[]">
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
