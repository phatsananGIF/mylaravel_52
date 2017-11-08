<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index(){
        $name = "gif";
        $email="gg@ff";
        return view('about',['name'=>$name,'email'=>$email]);
    }//f.index

}//class
