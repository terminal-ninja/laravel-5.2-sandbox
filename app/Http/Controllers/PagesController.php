<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['1', '2', '3'];
        return view('welcome', compact('people'));
    }
    public function about()
    {
        return view('about');
    }
}
