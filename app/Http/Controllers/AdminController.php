<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inbox(){
        return view('admin.inbox');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
