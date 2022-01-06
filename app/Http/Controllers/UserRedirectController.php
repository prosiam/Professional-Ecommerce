<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRedirectController extends Controller
{
    public function checkUserType(){
        $role = Auth::user()->role ;
        if ($role===1) {
            return view("admin.dashboard");
        }elseif ($role===2) {
            return view("admin.dashboard");
        }elseif ($role===3) {
            return view("user.dashboard");
        }
    }
}
