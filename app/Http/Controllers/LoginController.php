<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Module;

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
            $firstModule = Module::where("active",1)->orderby("order","ASC")->first();
            return redirect("/admin/".$firstModule->type);
        }
        else{
            return view('login');
        }
    }

}
