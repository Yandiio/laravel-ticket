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

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Jadwal Penerbangan</h1>

    <div class="card shadow mb-4">
      
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>No</th>
                <th>ID Pesawat</th>
                <th>Tujuan</th>
                <th>Bandara Keberangkatan</th> 
                <th>Waktu Keberangkatan</th>
                <th>Waktu Sampai</th>
                <th>Tanggal Keberangkatan</th>
                <th>Durasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>ID Pesawat</th>
                <th>Tujuan</th>
                <th>Bandara Keberangkatan</th> 
                <th>Waktu Keberangkatan</th>
                <th>Waktu Sampai</th>
                <th>Tanggal Keberangkatan</th>
                <th>Durasi</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
            @foreach($pswat as $table)
              <tr>
                @php $no = 1; @endphp
                <td>{{ $no++ }}</td>
                <td>{{$table->id_jdwlPesawat}}</td>
                <td>{{$table->tujuan}}</td>
                <td>{{$table->Bandara_keberangkatan}}</td>
                <td>{{$table->waktu_keberangkatan}}</td>
                <td>{{$table->waktu_sampai}}</td>
                <td>{{$table->tanggal_keberangkatan}}</td>
                <td>{{$table->durasi_perjalanan}}</td>
                <td>      
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  </table>
  </div>
  <!-- End of Main Content -->

  </div>
  <!-- End of Content Wrapper -->

  </div>

@endsection