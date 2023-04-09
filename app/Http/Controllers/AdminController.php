<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin-content.dashboard.dashboard');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
