@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mt-4">
                <div class="card bg-dark mb-5">
                    <div class="card-header text-white bg-dark bg-gradient ">{{ __('Dashboard') }}</div>

                    <div class="card-body bg-secondary">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="text-warning">
                                {{ __('Sei loggato!') }}
                            </div>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div class="card-header text-white bg-primary bg-gradient ">Bentornato</div>

                    <div class="card-body bg-secondary">
                       <p class="text-white">Esplora i progetti, modifica e crea in tutta libertà</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
