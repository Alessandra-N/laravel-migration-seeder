<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggio;

class PageController extends Controller
{
    function homepage()
{
    $viaggi = Viaggio::all();
    return view('homepage', compact('viaggi'));
}
}
