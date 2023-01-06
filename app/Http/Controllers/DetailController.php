<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailcart($id)
    {
        $cartItems = Cart::where('id', $id)->first();
        return view('detail_cart', compact('cartItems'));
    }

    public function cartList()
    {

        $cartItems = \Cart::getContent();
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->image,
            )
        ]);

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        return redirect()->route('cart.list');
    }
}
