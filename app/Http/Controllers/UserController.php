<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Human;

class UserController extends Controller
{
    public function welcome(Request $request){
        $humans = Human::all();
        return view('test.welcome',compact('humans'));
    }

    public function dashboard() {
        return view('dashboard');
    }
 }
