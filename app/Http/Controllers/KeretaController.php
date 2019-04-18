<?php

namespace App\Http\Controllers;

use App\kereta;
use App\jdwlKereta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeretaController extends Controller
{
    public function index(){
        $jdwl = jdwlKereta::get();
        return view('admin.kereta.index',compact('jdwl'));
    }

    public function station(){
        $sch = kereta::get();
        return view('admin.kereta.stasiun.index', compact('sch'));
    }


}
