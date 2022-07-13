<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return view('pages.landing-page');
        if(auth()->user()->hasRole('regular_user')){
            return view('home');
        }
        else {
            return view('pages.admin.dashboard');
        }
    }
}
