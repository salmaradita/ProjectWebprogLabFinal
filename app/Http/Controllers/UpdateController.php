<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function edit(){
        return view('auth.update');
    }
    protected function update(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'string', 'min:10'],
            'address'=> ['required', 'string', 'min:5'],
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
        ]);

        return view('/profile');
    }

}
