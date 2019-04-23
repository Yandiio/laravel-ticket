<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jdwlKereta;
use App\jdwlPesawat;
use app\booking;
use app\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = jdwlKereta::get();
        $schedule = jdwlPesawat::get();
        $user = user::get();
        return view('home',compact('jadwal','schedule','user'));
    }
}
