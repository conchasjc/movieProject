<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('Pages/viewMovies');
    }
    public function manage(){
        return view('Pages/manageMovies');
    }
    
}
