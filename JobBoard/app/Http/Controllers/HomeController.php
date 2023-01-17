<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( )
    {
        $advertisements=Advertisement::all();
        return view('pages.advertisements',compact('advertisements'));
    }
}
