<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('home');
    }

    public function ourMission(){
        return view('our_mission');
    }

    public function productCash(){
        return view('product_cash');
    }

    public function productTopup(){
        return view('product_topup');
    }

    public function faq(){
        return view('faq');
    }

    public function getStarted(){
        return view('get_started');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
