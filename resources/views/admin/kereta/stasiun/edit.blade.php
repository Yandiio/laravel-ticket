@extends('layouts.app')
@section('content')

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HayuCaw</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  @section('css')
  @show

<!-- </head> -->

@if(session('error'))
<div class="alert alert-error">
	{{ session('error') }}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>

	<br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Form stasiun</h1>

    <a href="{{ url('/station') }}">
        <button type="button" class="btn btn-secondary mb-2"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</button>
    </a>

    <form action="{{ url('station' , @$stasiun->id_stasiun) }}" method="POST">
    <!-- @csrf -->
    
	@if(!empty($stasiun))
  {{csrf_field()}}
		{{method_field('PATCH')}}
		<!-- BLANK -->
	@endif

  <div class="form-group">
      <label for="formGroupSeri">Seri</label>
      <input type="text" class="form-control" id="formGroupNoseri" name="nomor" value="{{ old ('nomor',@$stasiun->nomor) }}">
    </div>
  	<div class="form-group">
    	<label for="formGroupTujuan">Nama Stasiun</label>
      	<input type="text" class="form-control" id="formGroupNama" name="nama_stasiun" value="{{ old('nama_stasiun' , @$stasiun->nama_stasiun) }}" autocomplete="off">
  	</div>	
	<div class="form-group">
    	<label for="formGroupBandara">Kota</label>
      	<input type="text" class="form-control" id="formGroupStasiun" name="kota" value="{{ old('kota' , @$stasiun->kota) }}" autocomplete="off">
  	</div>
    <div class="form-group">
    	<label for="formGroupWBerangkat">Alamat</label>
      	<input type="text" class="form-control" id="formGroupAlamat" name="alamat" value="{{ old('alamat' , @$stasiun->alamat) }}" autocomplete="off">
  	</div>
      <div class="form-group">
    	<label for="formGroupWSampai">Keterangan</label>
      	<input type="text" class="form-control" id="formGroupKeterangan" name="keterangan" value="{{ old('keterangan' , @$stasiun->keterangan) }}" autocomplete="off">
  	</div>     

	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
    </form>

    </div>
    @endsection