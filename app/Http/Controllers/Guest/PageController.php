<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = movie::all();

        return view('home', compact('movies'));
    }

    public function about(){
        return view('about');
    }

    public function details($id){
        $movie = movie::find($id);
        if (is_null($movie)) {
            abort('404');
        }
        return view('details', compact('movie'));
    }
}
