@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project->title }} - {{ $project->languages }}</li>
            @endforeach
        </ul>
    </div>
@endsection
