@extends('layouts.app')

@section('content')
    <div class="h1 text-center mb-3">Find Your Best Clothes Here!</div>
    <div class="container">
        <div class="row">
            @foreach ($dashboards as $dashboard)
            <div class="col-3 mb-3 order-1 mt-3">
              <div class="card">
              <img src="{{ asset('storage/img/'.$dashboard->image) }}" class="card-img-top" alt="clothes">
                  <div class="card-body">
                      <h5 class="card-title"><strong>{{ $dashboard->name }}</strong></h5>
                      <p class="card-text w-full">Rp {{ $dashboard->price  }}</p>
                      <a href="{{ url('detail_item', $dashboard->id) }}" class="btn btn-primary mt-3"> More Detail</a>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
    </div>

    <br> <br>
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item active" aria-current="page">
        <span class="page-link">1</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
  </nav>

@endsection
