<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
class HomeController extends Controller
{
    public function index(){
        $ob=new home();
        $con=$ob->getV();

        return view('home',['con'=>$con]);

    }
}
