@extends('layouts.app')
@section('content')

@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop

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
    <h1 class="h3 mb-4 text-gray-800">Form Pesawat</h1>

    <form action="{{ url('pesawat' , @$pesawat->id) }}" method="POST">
    <!-- @csrf -->
    {{csrf_field()}}
	@if(!empty($pesawat))
		@method('PATCH')
		<!-- BLANK -->
	@endif

  	<div class="form-group">
    	<label for="formGroupNamapesawat">Nama Pesawat</label>
      	<input type="text" class="form-control" id="formGroupNamapesawat" name="nama_pesawat" value="{{ old('nama_pesawat' , @$pesawat->nama_pesawat) }}" autocomplete="off">
  	</div>	
	<div class="form-group">
    	<label for="formGroupKode">Kode Pesawat</label>
      	<input type="text" class="form-control" id="formGroupKode" name="kode_pesawat" value="{{ old('kode_pesawat' , @$pesawat->kode_pesawat) }}" autocomplete="off">
  	</div>
    <div class="form-group">
    	<label for="formGroupKapasitas">Kapasitas</label>
      	<input type="number" class="form-control" id="formGroupKapasitas" name="kapasitas" value="{{ old('kapasitas' , @$pesawat->kapasitas) }}" autocomplete="off" min="30" max="500">
  	</div>
    <div class="form-group">
    	<label for="formGroupTipe">Tipe Pesawat</label>
      	<input type="text" class="form-control" id="formGroupTipe" name="tipe_pesawat" value="{{ old('tipe_pesawat' , @$pesawat->tipe_pesawat) }}" autocomplete="off">
  	</div>
    <div class="form-group">
    	<label for="formGroupMaskapai">Maskapai</label>
      	<input type="text" class="form-control" id="formGroupMaskapai" name="maskapai" value="{{ old('maskapai' , @$pesawat->maskapai) }}" autocomplete="off">
  	</div>     
      <div class="form-group">
    	<label for="formGroupTahun">Tahun Pesawat</label>
      	<input type="number" class="form-control" id="formGroupTahun" name="tahun_pesawat" value="{{ old('tahun_pesawat' , @$pesawat->tahun_pesawat) }}" autocomplete="off" min="1" max="2030">
  	</div> 
    <!-- foto -->
		<div class="form-group">
    	<label for="formGroupTahun">Foto</label><br>
			<input type="file" id="inputgambar" name="gambar" class="validate" value="{{ old('foto' , @$pesawat->foto) }}" autocomplete="off" min="1" max="2030" >
  	</div> <br>
	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
    </form>

    </div>
    @endsection