@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mt-4">
                <div class="card bg-dark">
                    <div class="card-header text-white bg-primary bg-gradient ">{{ __('Dashboard') }}</div>

                    <div class="card-body bg-secondary">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="text-warning">
                                {{ __('You are logged in!') }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
