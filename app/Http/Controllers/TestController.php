<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    function demo(){
        $data = Http::get("http://127.0.0.1:8000/api/demo");
        return view('demo',['data'=>$data]);
    }
    function test(Request $request){
        $token = Session::get('token');
        $data = Http::withToken($token)->get("http://127.0.0.1:8000/api/test");
        if($data){
            return view('test',['data'=>$data]);
        }
    }
    function logout(Request $request){
        $token = Session::get('token');
        $data = Http::withToken($token)->get("http://127.0.0.1:8000/api/logout");
        if($data){
            return view('logout',['data'=>$data]);
        }
    }
    
    function login(Request $request){
        $data = Http::post("http://127.0.0.1:8000/api/login",[
            'email' => $request->email,
            'password' => $request->password,
        ]);
        Session::put('token',$data['token']);
        Session::save();
        return view('login_success',['data'=>$data]);
    }
    // function login(Request $request){
    //     $data = Http::post("http://127.0.0.1:8000/api/login",[
    //         'email' => 'jahid@gmail.com',
    //         'password' => '123456',
    //     ]);
    //     Session::put('token',$data['token']);
    //     Session::save();
    //     //return view('login_success',['data'=>$data]);
    // }
    function loginView(){
        return view('login');
    }
}
