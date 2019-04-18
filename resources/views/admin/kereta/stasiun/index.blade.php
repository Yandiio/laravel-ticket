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

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Stasiun Kereta</h1>

  </div>
  <!-- /.container-fluid -->
   <!-- Begin Page Content -->
   <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    List dari stasiun kereta yang tertera
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Seri</th>
            <th>Nama Stasiun</th>
            <th>Kota</th>
            <th>Alamat</th>
            <th>keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($sch as $table)
            @php $no = 1; @endphp
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{$table->nomor}}</td>
            <td>{{$table->nama_stasiun}}</td>
            <td>{{$table->kota}}</td>
            <td>{{$table->alamat}}</td>
            <td>{{$table->keterangan}}</td>
            <td>
            <td>
                <a class="btn btn-warning " href="/stasiun/edit/{{$table->id}}">Edit</a>
                <a class="btn btn-danger" href="/stasiun/hapus/{{$table->id}}">Hapus</a>
                </td>
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
  @endsection
  </div>
