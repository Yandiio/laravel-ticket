<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class AdminController extends Controller
{
    public function index(){
        $user = User::get();
        return view('admin.user.index',compact('user'));
    }

}
