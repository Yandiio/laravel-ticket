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
        $jdwl = jdwlKereta::paginate(5);
        return view('admin.kereta.index',compact('jdwl'));
    }

    public function edit(){
        
    }

    public function destroy(request $request,$id){
        $jdwl = jdwlKereta::find($id);
        $status = $jdwl->delete();
    //    if($status){
           return redirect('/schedule/{id}')->with('success','data berhasil dihapus');
    //    }else{
    //        return redirect('/schedule');
    //    }
    }

    public function station(){
        $sch = kereta::paginate(4);
        return view('admin.kereta.stasiun.index', compact('sch'));
    }



}
