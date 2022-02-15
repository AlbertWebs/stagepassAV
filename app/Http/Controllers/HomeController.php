<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home.index');
    }

    public function about(){
        return view('front.about.index');
    }

    public function services(){
        return view('front.services.index');
    }

    public function service($slung){
        return view('front.services.service');
    }

    public function contact_us(){
        return view('front.contact.index');
    }

    public function our_work(){
        return view('front.work.index');
    }

    public function work($slung){
        return view('front.work.work');
    }
}
