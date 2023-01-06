@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card justify-content-center mt-5" style="max-width: 800px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('storage/img/'.$dashboard->image) }}" class="img-fluid rounded-start" alt="clothes">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><strong>{{ $dashboard->name }}</strong></h4>
                  <p class="card-text">Rp {{ $dashboard->price }}</p>
                  <hr>
                  <h5 class="card-title"><strong>Product Detail</strong></h5>
                  <p class="card-text">{{ $dashboard->desc }}</p>
                  <hr style="border-width:10px">
                  <br>
                  <a href="/dashboard" class="px-4 py-2 text-white bg-red-800 rounded">Back</a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
