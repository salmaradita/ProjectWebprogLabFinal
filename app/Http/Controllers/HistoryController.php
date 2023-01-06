<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function History()
    {

        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('history', compact('cartItems'));
    }
}
