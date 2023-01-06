@extends('layouts.app')

@section('content')
    <div class="h1 text-center">
        Search Your Favorite Clothes!
    </div>

    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <form action="/search">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Here" name="search">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach ($searchs as $search)
            <div class="col-3 mb-3 order-1 mt-3">
              <div class="card">
                <a class="card-link" href="{{ route('welcome', $search->id) }}">
              <img src="{{ asset('storage/img/'.$search->image) }}" class="card-img-top" alt="clothes">
                  <div class="card-body">
                      <h5 class="card-title"><strong>{{ $search->name }}</strong></h5>
                      <p class="card-text w-full">Rp {{ $search->price  }}</p>
                  </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection


