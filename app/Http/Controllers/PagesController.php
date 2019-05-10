<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function HomePage(){
        return view('pages.home');
    }

    public function DiscountPage(){
        return view('pages.discount');
    }
}
