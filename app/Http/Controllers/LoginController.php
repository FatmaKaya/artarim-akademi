<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $result = User::where("email",$request->email)->where("password",md5($request->password))->first();
    
        if($result) {
            return view('welcome');
        }
        else{
            return view('login');
        }
    }

}
