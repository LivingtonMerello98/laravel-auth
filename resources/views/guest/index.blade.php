@extends('layouts.guest')

@section('about')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-2 text-center">
                <h4 class="text-white py-3 text-uppercase">About Me</h4>
                
            </div>
        </div>
    </div>
</section>
    
@endsection

@section('content')

    <section>
        <div class="container py-5">
            <h2 class="text-white">Progetti</h2>
            @foreach ($projects as $project)
                <ul>
                    <li class="text-white">{{ $project->title }} - {{ $project->languages }}</li>
                </ul>
            @endforeach
        </div>
    </section>
@endsection


@section('contact')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-white"> contacts</h3>
                </div>
            </div>
        </div>
    </section>

@endsection