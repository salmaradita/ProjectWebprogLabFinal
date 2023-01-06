@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="h1 text-center mb-3">Check What You've Bought!</div>
        @foreach ($cartItems as $item)
        <div class="card mb-3" style="background-color:rgb(239, 241, 243)">
                <div class="col-md-12 mb-2">
                    <div class="card-body">
                        <div class="h4">2023-01-05</div>
                            <div class="h4">  {{ $item->quantity }} pcs {{ $item->name }} </div>
                            <div class="Total h4"style="text-align: end;">
                                Price : Rp {{ $item->price}}
                            </div>
                    </div>
                </div>
        </div>
        @endforeach
        <hr style="border-width:5px">
        <div class="h3 mt-2" style="text-align: end;">
            Grand Total : Rp {{Cart::getTotal()}}
        </div>
        <hr style="border-width:5px">
    </div>
@endsection
