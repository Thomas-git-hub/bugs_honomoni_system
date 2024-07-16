<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('user.user');
    }

    public function change_pass(){
        return view('user.change_pass');
    }

    public function login(){
        return view('login');
    }

    public function index(){
        return view('index');
    }

    // public function dashboard(){
    //     return view('dashboard');
    // }



}
