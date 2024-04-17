<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function form()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        $namaDepan = $request->input('first_name');
        $namaBelakang = $request->input('last_name');
        return view('welcome', ['firstname' => $namaDepan, 'lastname' => $namaBelakang]);
    }
}
