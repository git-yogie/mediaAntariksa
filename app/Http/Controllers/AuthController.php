<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Logout(){
        auth()->logout();
        return redirect()->route("welcome.index");
    }
}
