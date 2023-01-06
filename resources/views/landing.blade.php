@extends('layouts.main')

@section('container')

    <div class="card text-bg-dark">
            <img src="img/welcomepict.jpg" class="card-img" alt="welcome pict">
            <div class="card-img-overlay" style="margin: 250px; text-align:center">
                <div class="hero" style="backdrop-filter: blur(10px); margin:20px">
                    <h3 class="card-title text-center"><strong>Welcome to MaiBoutique</strong></h3>
                    <p class="card-text text-center">Online Boutique that Provides You with Various Clothes to Suit Your Various Activities.</p>
                    <a class="btn btn-primary" href="/register" role="button">Sign Up Now</a>
                </div>
            </div>
    </div>

@endsection
