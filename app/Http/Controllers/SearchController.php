<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request){
        if($request->has('search')){
            $searchs = Welcome::where('name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $searchs = Welcome::all();
        }
        // $category = Category::all();
        return view('search', compact('searchs'));

    }
}
