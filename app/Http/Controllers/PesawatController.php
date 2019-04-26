<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesawat;
use App\jdwlPesawat;
use App\bandara;
use Alert;

class PesawatController extends Controller
{
    /* JADWAL KEBERANGKATAN */
    public function jdwl(){
        $jadwal = jdwlPesawat::paginate(4);
        return view('admin.pesawat.index',compact('jadwal'));
    }

    public function jdwlTambah(){
        return view('admin.pesawat.form');
    }
    
    public function jdwlStore(Request $request)
    {
    	$rule = [
    		'tujuan' => 'required|string',
    		'Bandara_keberangkatan' => 'required|string',
            'waktu_keberangkatan' => 'required',
            'waktu_sampai'=>'required',
            'tanggal_keberangkatan' => 'required|date',
            'Durasi_perjalanan' => 'required'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	$jadwal = new \App\jdwlPesawat;
    	$jadwal->tujuan = $input['tujuan'];
    	$jadwal->Bandara_keberangkatan = $input['Bandara_keberangkatan'];
        $jadwal->waktu_keberangkatan = $input['waktu_keberangkatan'];
        $jadwal->waktu_sampai = $input['waktu_sampai'];
        $jadwal->tanggal_keberangkatan = $input['tanggal_keberangkatan'];
        $jadwal->Durasi_perjalanan = $input['Durasi_perjalanan'];
    	$status = $jadwal->save();

    	if ($status) {
            Alert::success('Success', 'Data Berhasil Ditambah');
    		return redirect('/jadwal')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/jadwal/tambah')->with('error', 'Data gagal ditambahkan');
    	}
    }

    public function jdwlUpdate(Request $request,$id)
    {
    	$rule = [
    		'tujuan' => 'required|string',
    		'Bandara_keberangkatan' => 'required|string',
            'waktu_keberangkatan' => 'required',
            'waktu_sampai'=>'required',
            'tanggal_keberangkatan' => 'required',
            'Durasi_perjalanan' => 'required|integer'
    	];
        $this->validate($request, $rule);
        $input = $request->all();

        $naon = jdwlPesawat::where('id_jdwlPesawat', $id);
        unset($input['_token']);
    	unset($input['_method']);
        $status = $naon->update($input);


    	if ($status) {
    		return redirect('/jadwal')->with('success', 'Data berhasil diedit');
    	} else {
    		return redirect('/jadwal/tambah')->with('error', 'Data gagal diedit');
        }
        
    }

    public function jdwlEdit(Request $request,$id){
        $data = jdwlPesawat::where('id_jdwlPesawat',$id)->first();
        return view('admin.pesawat.edit',['jadwal' => $data]);
    }

    public function jdwlHapus(Request $request, $id)
    {
    	$jadwal = jdwlPesawat::where('id_jdwlPesawat',$id)->delete();

    	if ($jadwal) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/jadwal')->with('Berhasil', 'Data berhasil dihapus');
    	} else {
    		return redirect('/jadwal/tambah')->with('error', 'Data gagal dihapus');
    	}
    }

    /* PESAWAT */
    public function pswt(){
        $pswt = pesawat::paginate(4);
        return view('admin.pesawat.jenis.index',compact('pswt'));
    }
    
    public function pswtTambah(){
        return view('admin.pesawat.jenis.form');
    }
    
    public function pswtStore(Request $request)
    {
    	$rule = [
    		'nama_pesawat' => 'required|string',
    		'kode_pesawat' => 'required|string',
            'kapasitas' => 'required|integer',
            'tipe_pesawat'=>'required',
            'maskapai' => 'required',
            'tahun_pesawat' => 'required|integer',
            'photo' => 'required',
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	$pesawat = new \App\pesawat;
    	$pesawat->nama_pesawat = $input['nama_pesawat'];
    	$pesawat->kode_pesawat = $input['kode_pesawat'];
        $pesawat->kapasitas = $input['kapasitas'];
        $pesawat->tipe_pesawat = $input['tipe_pesawat'];
        $pesawat->maskapai = $input['maskapai'];
        $pesawat->tahun_pesawat = $input['tahun_pesawat'];
        $pesawat->photo = $filename;

        // upload foto
        $file = $request->file('photo');
        $filename= $file->getClientOriginalName();
        $request->file('photo')->move("image/",$filename);


    	$status = $pesawat->save();

    	if ($status) {
    		return redirect('/pesawat')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/pesawat/tambah')->with('error', 'Data gagal ditambahkan');
    	}
    }

    public function pswtHapus(Request $request, $id)
    {
    	$jadwal = pesawat::where('id_pesawat',$id)->delete();

    	if ($jadwal) {
    		return redirect('/pesawat')->with('success', 'Data berhasil dihapus');
    	} else {
    		return redirect('/pesawat/tambah')->with('error', 'Data gagal dihapus');
    	}
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
            'negara'=>'required',
    		'keterangan' => 'required'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
    	$bandara = new \App\bandara;
    	// $bandara->id_bandara = $input['id_bandara '];
    	$bandara->nama_bandara = $input['nama_bandara'];
    	$bandara->kota = $input['kota'];
        $bandara->alamat = $input['alamat'];
        $bandara->negara = $input['negara'];
        $bandara->keterangan = $input['keterangan'];
    	$status = $bandara->save();

    	if ($status) {
            Alert::success('Success', 'Data Berhasil Ditambah');
    		return redirect('/bandara')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/bandara/tambah')->with('error', 'Data gagal ditambahkan');
    	}
    }

    public function bndrUpdate(Request $request,$id)
    {
    	$rule = [
    		'nama_bandara' => 'required|string',
    		'kota' => 'required|string',
            'alamat' => 'required',
            'negara'=>'required',
    		'keterangan' => 'required'
    	];
        $this->validate($request, $rule);
        $input = $request->all();

        $naon = bandara::where('id_bandara', $id);
        unset($input['_token']);
    	unset($input['_method']);
        $status = $naon->update($input);


    	if ($status) {
    		return redirect('/bandara')->with('success', 'Data berhasil diedit');
    	} else {
    		return redirect('/bandara/tambah')->with('error', 'Data gagal diedit');
        }
        
    }

    public function bndrEdit(Request $request,$id){
        $data = bandara::where('id_bandara',$id)->first();
        return view('admin.pesawat.bandara.edit',['bandara' => $data]);
    }

    public function bndrHapus(Request $request, $id)
    {
    	$jadwal = bandara::where('id_bandara',$id)->delete();

    	if ($jadwal) {
            Alert::success('Success', 'Data Berhasil Dihapus');
    		return redirect('/bandara')->with('success', 'Data berhasil dihapus');
    	} else {
    		return redirect('/bandara/tambah')->with('error', 'Data gagal dihapus');
    	}
    }

}
