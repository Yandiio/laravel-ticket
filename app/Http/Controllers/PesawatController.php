<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesawat;
use App\jdwlPesawat;
use App\bandara;

class PesawatController extends Controller
{
    public function jdwl(){
        $jadwal = jdwlPesawat::paginate(4);
        return view('admin.pesawat.index',compact('jadwal'));
    }

    public function pswt(){
        $pswt = pesawat::paginate(4);
        return view('admin.pesawat.jenis.index',compact('pswt'));
    }
    /* BANDARA */
    public function bndr(){
        $bandara = bandara::paginate(4);
        return view('admin.pesawat.bandara.index',compact('bandara'));
    }
    public function bndrTambah(){
        return view('admin.pesawat.bandara.form');
    }
    
    public function bndrStore(Request $request)
    {
    	$rule = [
    		'nama_bandara' => 'required|string',
    		'kota' => 'required|string',
    		'alamat' => 'required',
    		'keterangan' => 'required'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	$bandara = new \App\bandara;
    	// $bandara->id_bandara = $input['id_bandara '];
    	$bandara->nama_bandara = $input['nama_bandara'];
    	$bandara->kota = $input['kota'];
        $bandara->alamat = $input['alamat'];
        $bandara->keterangan = $input['keterangan'];
    	$status = $bandara->save();

    	if ($status) {
    		return redirect('/bandara')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/bandara/tambah')->with('error', 'Data gagal ditambahkan');
    	}
    }
}
