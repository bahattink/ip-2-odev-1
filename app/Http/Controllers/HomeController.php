<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $isim = 'Murat';

        return view('home', compact('isim'));
    }
    public function indexTwo()
    {
        $isim = 'Murat';

        return view('home', compact('isim'));
    }
}
