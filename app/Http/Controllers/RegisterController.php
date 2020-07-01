<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form() {
        return view('form');
    }

    public function sapa(Request $request) {
        // var_dump($request);
        
        return "Hallo"; 
    }
    public function awal() {
        // var_dump($request);
        
        return view('halaman');
    }

    public function sapa_post(Request $request) {
        // dd($request->all());
        return "oke";
    }

    public function selamat (Request $request) {
        return view('test');
    }
}
