<?php

namespace App\Http\Controllers;

use App\kereta;
use App\jdwlKereta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class KeretaController extends Controller
{
    // jadwal kereta
    public function index(){
        $jdwl = jdwlKereta::paginate(5);
        return view('admin.kereta.index',compact('jdwl'));
    }

    public function jdwlTambah(){
        return view('admin.kereta.form');
    }
    
    public function jdwlStore(Request $request)
    {
    	$rule = [
    		'tujuan' => 'required|string',
    		'stasiun_keberangkatan' => 'required|string',
            'waktu_keberangkatan' => 'required',
            'waktu_sampai'=>'required',
            'tanggal_keberangkatan' => 'required|date',
            'Durasi_perjalanan' => 'required'
    	];
        $this->validate($request, $rule);

    	$input = $request->all();
    	$jadwal = new jdwlKereta;
    	$jadwal->tujuan = $input['tujuan'];
    	$jadwal->stasiun_keberangkatan = $input['stasiun_keberangkatan'];
        $jadwal->waktu_keberangkatan = $input['waktu_keberangkatan'];
        $jadwal->waktu_sampai = $input['waktu_sampai'];
        $jadwal->tanggal_keberangkatan = $input['tanggal_keberangkatan'];
        $jadwal->Durasi_perjalanan = $input['Durasi_perjalanan'];
    	$status = $jadwal->save();

    	if ($status) {
            Alert::success('Success', 'Data Berhasil Ditambah');
    		return redirect('/schedule')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/schedule/tambah')->with('error', 'Data gagal ditambahkan');
    	}
    }
    public function jdwlUpdate(Request $request,$id)
    {
    	$rule = [
    		'tujuan' => 'required|string',
    		'stasiun_keberangkatan' => 'required|string',
            'waktu_keberangkatan' => 'required',
            'waktu_sampai'=>'required',
            'tanggal_keberangkatan' => 'required',
            'Durasi_perjalanan' => 'required|integer'
    	];
        $this->validate($request, $rule);
        $input = $request->all();

        $naon = jdwlKereta::where('id', $id);
        unset($input['_token']);
    	unset($input['_method']);
        $status = $naon->update($input);


    	if ($status) {
    		return redirect('/schedule')->with('success', 'Data berhasil diedit');
    	} else {
    		return redirect('/schedule/tambah')->with('error', 'Data gagal diedit');
        }
        
    }

    public function jdwlEdit(Request $request,$id){
        $data = jdwlKereta::where('id',$id)->first();
        return view('admin.kereta.edit',['jadwal' => $data]);
    }

    public function Hapus(Request $request, $id)
    {
    	$jadwal = jdwlKereta::where('id',$id)->delete();

    	if ($jadwal) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/schedule')->with('Berhasil', 'Data berhasil dihapus');
    	} else {
    		return redirect('/schedule/tambah')->with('error', 'Data gagal dihapus');
    	}
    }


    // stasiun
    public function station(){
        $sch = kereta::paginate(4);
        return view('admin.kereta.stasiun.index', compact('sch'));
    }

    public function Tambah(){
        return view('admin.kereta.stasiun.form');
    }
    
    public function Store(Request $request)
    {
    	$rule = [
    		'nomor' => 'required',
    		'nama_stasiun' => 'required|string',
            'kota' => 'required',
            'alamat'=>'required',
            'keterangan' => 'required',    
    	];
        $this->validate($request, $rule);

    	$input = $request->all();
    	$stasiun = new kereta;
    	$stasiun->nama_stasiun = $input['nama_stasiun'];
    	$stasiun->nomor= $input['nomor'];
        $stasiun->kota = $input['kota'];
        $stasiun->alamat = $input['alamat'];
        $stasiun->keterangan = $input['keterangan'];
    	$status = $stasiun->save();

    	if ($status) {
            Alert::success('Success', 'Data Berhasil Ditambah');
    		return redirect('/station')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/station/tambah')->with('error', 'Data gagal ditambahkan');
    	}
    }

    public function Destroy(Request $request, $id)
    {
    	$jadwal = kereta::where('id_stasiun',$id)->delete();

    	if ($jadwal) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/station')->with('Berhasil', 'Data berhasil dihapus');
    	} else {
    		return redirect('/station/tambah')->with('error', 'Data gagal dihapus');
    	}
    }

    public function stationUpdate(Request $request,$id)
    {
    	$rule = [
    		'nomor' => 'required',
    		'nama_stasiun' => 'required|string',
            'kota' => 'required',
            'alamat'=>'required',
    		'keterangan' => 'required'
    	];
        $this->validate($request, $rule);
        $input = $request->all();

        $naon = kereta::where('id_stasiun', $id);
        unset($input['_token']);
    	unset($input['_method']);
        $status = $naon->update($input);


    	if ($status) {
    		return redirect('/station')->with('success', 'Data berhasil diedit');
    	} else {
    		return redirect('/station/tambah')->with('error', 'Data gagal diedit');
        }
        
    }

    public function stationEdit(Request $request,$id){
        $data = kereta::where('id_stasiun',$id)->first();
        return view('admin.kereta.stasiun.edit',['stasiun' => $data]);
    }



}
