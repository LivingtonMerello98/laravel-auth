@extends('layouts.guest')


@section('content')

    <div class="container">
        
        <h2>Progetti</h2>
        @foreach ($projects as $project)
            <ul>
                <li>{{ $project->title }} - {{ $project->languages }}</li>
            </ul>
        @endforeach

    </div>

@endsection