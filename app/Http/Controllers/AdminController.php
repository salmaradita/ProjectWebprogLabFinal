<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function dashboard()
    {
        $dashboards = Item::all();
        return view('admin\dashboard', compact('dashboards'));
    }

    public function detailitem($id)
    {
        $dashboard = Item::where('id', $id)->first();
        return view('admin\detail_item', compact('dashboard'));
    }


    public function create()
    {
        return view('admin\item');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|min:5|max:20',
            'image' => 'required|mimes:png,jpg',
            'desc' => 'required|min:5',
            'price' => 'required|numeric|min:1000',
            'stock' => 'required|numeric|min:1'
        ]);
        $new_product = new Item;
        $new_product->name = $req->name;
        $new_product->desc = $req->desc;
        $new_product->price = $req->price;
        $new_product->stock = $req->stock;
        $path = $req->file('image')->getRealPath();
        $image = file_get_contents($path);
        Storage::put("public/img/".$req->file('image')->getClientOriginalName(), $image);
        $new_product->image = $req->file("image")->getClientOriginalName();
        $new_product->save();
        return redirect(route('dashboard'));
    }

}
