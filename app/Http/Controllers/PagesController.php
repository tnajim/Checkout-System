<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function HomePage(){
        return view('pages.home');
    }

    public function DiscountPage(){
        return view('pages.discount');
    }

    function homeinsert(Request $req){
        $apples = $req->input('apples');
        $oranges = $req->input('oranges');
        $price = $req->input('totalprice');
        $discounted = "false";

        $data = array('apples'=>$apples,'oranges'=>$oranges,'price'=>$price,'discounted'=>$discounted);

        DB::table('posts')->insert($data);

        return view('pages.home');
    }

    function discountinsert(Request $req){
        $apples = $req->input('apples');
        $oranges = $req->input('oranges');
        $price = $req->input('totalprice');
        $discounted = "true";

        $data = array('apples'=>$apples,'oranges'=>$oranges,'price'=>$price,'discounted'=>$discounted);

        DB::table('posts')->insert($data);

        return view('pages.discount');
    }
}
