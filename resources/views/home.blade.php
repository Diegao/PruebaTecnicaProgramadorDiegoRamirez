@extends('adminlte::page')

@section('title', 'Admin Guayacan')

@section('content_header')

<h1> Admin - Guayacan </h1>

@stop


@section('content')

<div class="container">
<nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logoguayacan.jpg')}}" width="200" alt="" loading="lazy">
            </a>
        </div>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
       
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido: ') }} {{ Auth::user()->name }}

              

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

