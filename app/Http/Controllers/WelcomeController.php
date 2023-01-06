<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $welcomes = Welcome::all();
        return view('welcome', compact('welcomes'));
    }

    public function detailproduct($id)
    {
        $welcome = Welcome::where('id', $id)->first();
        return view('detail_product', compact('welcome'));
    }

}
