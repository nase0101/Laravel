<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    //
    public function home(){
    	$people = ['A','B','C'];
        return view('welcome', compact('people'));
    }

    public function about(){
    	return view('about');
    }
}
