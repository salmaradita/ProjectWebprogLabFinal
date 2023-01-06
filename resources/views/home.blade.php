@extends('layouts.app')

@section('content')

    <div class="card">
        <img src="img/welcomepict.jpg" class="card-img" alt="welcome pict">
        <div class="card-img-overlay" style="margin: 250px; text-align:center">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card" style="backdrop-filter: blur(10px);">
                            <div class="card-header">Welcome,  {{ Auth::user()->name }}</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('You are logged in!') }}
                                <br> <br>
                                @if (auth()->user()->role == 'member')
                                    <a class="btn btn-primary" href="/welcome" role="button">Go to Shopping</a>
                                @endif
                                @if (auth()->user()->role == 'admin')
                                <a class="btn btn-primary" href="/dashboard" role="button">Go to Item</a>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
