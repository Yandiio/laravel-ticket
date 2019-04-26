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
    <h1 class="h3 mb-4 text-gray-800">Edit Form jadwal</h1>

    <a href="{{ url('/schedule') }}">
        <button type="button" class="btn btn-secondary mb-2"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</button>
    </a>

    <form action="{{ url('schedule' , @$jadwal->id) }}" method="POST">
    <!-- @csrf -->
    
	@if(!empty($jadwal))
  {{csrf_field()}}
		{{method_field('PATCH')}}
		<!-- BLANK -->
	@endif

  	<div class="form-group">
    	<label for="formGroupTujuan">Tujuan</label>
      	<input type="text" class="form-control" id="formGroupTujuan" name="tujuan" value="{{ old('tujuan' , @$jadwal->tujuan) }}" autocomplete="off">
  	</div>	
	<div class="form-group">
    	<label for="formGroupStasiun">Stasiun Keberangkatan</label>
      	<input type="text" class="form-control" id="formGroupStasiun" name="stasiun_keberangkatan" value="{{ old('stasiun_keberangkatan' , @$jadwal->stasiun_keberangkatan) }}" autocomplete="off">
  	</div>
    <div class="form-group">
    	<label for="formGroupWBerangkat">Waktu Keberangkatan</label>
      	<input type="time" class="form-control" id="formGroupWBerangkat" name="waktu_keberangkatan" value="{{ old('waktu_keberangkatan' , @$jadwal->waktu_keberangkatan) }}" autocomplete="off">
  	</div>
      <div class="form-group">
    	<label for="formGroupWSampai">Waktu Sampai</label>
      	<input type="time" class="form-control" id="formGroupWSampai" name="waktu_sampai" value="{{ old('waktu_sampai' , @$jadwal->waktu_sampai) }}" autocomplete="off">
  	</div>   
    <div class="form-group">
    	<label for="formGroupTGL">Tanggal Keberangkatan</label>
      	<input type="date" class="form-control" id="formGroupTGL" name="tanggal_keberangkatan" value="{{ old('tanggal_keberangkatan' , @$jadwal->tanggal_keberangkatan) }}" autocomplete="off">
  	</div>
    <div class="form-group">
    	<label for="formGroupDurasi">Durasi Perjalanan</label>
      	<input type="number" class="form-control" id="formGroupDurasi" name="Durasi_perjalanan" value="{{ old('Durasi_perjalanan' , @$jadwal->Durasi_perjalanan) }}" autocomplete="off">
  	</div>     

	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
    </form>

    </div>
    @endsection