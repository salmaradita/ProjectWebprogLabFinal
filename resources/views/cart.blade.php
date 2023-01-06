@extends('layouts.app')

@section('content')
<style>
    .Total{
        text-align: end;
    }
</style>
<div class="container">
    <div class="h1 text-center">My Cart</div>
    <div class="Total h2">
        Total: Rp {{ Cart::getTotal() }}
    </div>
    <div class="row">
        @foreach ($cartItems as $item)
        <div class="col-3 mb-3 order-1 mt-3">
          <div class="card">
                  <img src="{{'storage/img/'.$item->attributes->image }}" class="card-img-top" alt="clothes">
                  <div class="card-body">
                      <h5 class="card-title"><strong>{{ $item->name }}</strong></h5>
                      <p class="card-text w-full">Rp {{ $item->price }}</p>
                      <p class="mt-2">Qty : {{ $item->quantity }}</p>
                  </div>

                    <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}" >
                            <div class="row justify-content-center">
                                <input type="number" name="quantity" value="{{ $item->quantity }}"
                                class="form-control w-25">
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-primary">Update Quantity</button>
                                </div>
                            </div>
                    </form>
                    <br>
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <div style="text-align: center">
                            <button class="px-4 py-2 text-white bg-red-600 text-center">Remove Item</button>
                        </div>
                    </form>

          </div>
        </div>
        @endforeach
      </div>
</div>
@endsection
