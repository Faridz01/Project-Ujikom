@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="background-color:#FFFF00;">
                <div class="card-header">{{ __('Hallo') }}</div>
                <div class="card-body" style="background-color:#00FFFF;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i>Selamat Datang Di Website</i> <b>{{Auth::user()->name}}</b>
                    <!-- {{ __('You are logged in!') }} -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 <!-- Hai {{Auth::user()->name}} -->
