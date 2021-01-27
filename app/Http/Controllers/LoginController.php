<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    public function doLogin(Request $req){
        // return $req->input();
        $data=DB::table('user_p_s')->where([
            ['email',$req['email']],
            ['password',$req['password']],
            ])->get();

        if(count($data)!=0){

            $sessionData=[
                'name'=>$data->pluck('name'),
                'surname'=>$data->pluck('surname')
            ];
            $req->session()->put('name',$sessionData['name']);

            return redirect('admin');
        }else{

            return redirect('login')->with('alert-danger', 'You are not logged in.');
        }
    }
}
