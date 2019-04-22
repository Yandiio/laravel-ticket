@extends('layouts.app')
@section('content')
{{csrf_field()}}

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
    <h1 class="h3 mb-4 text-gray-800">Jadwal Keberangkatan</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Jadwal yang terdaftar</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <a href="{{ url('/schedule/tambah/') }}">
          <button class="btn btn-success">Tambah Data</button>
        </a> 
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tujuan</th>
                <th>Stasiun Keberangkantan</th>
                <th>Waktu berangkat</th>
                <th>Waktu sampai</th>
                <th>Tanggal berangkat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tujuan</th>
                <th>Stasiun Keberangkantan</th>
                <th>Waktu berangkat</th>
                <th>Waktu sampai</th>
                <th>Tanggal berangkat</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              @php $no = 1; @endphp
              @foreach($jdwl as $table)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{$table->tujuan}}</td>
                <td>{{$table->stasiun_keberangkatan}}</td>
                <td>{{$table->waktu_keberangkatan}}</td>
                <td>{{$table->waktu_sampai}}</td>
                <td>{{$table->tanggal_keberangkatan}}</td>
                <td>
                <a class="btn btn-warning " href="{{url('/schedule /'. $table->id .'/edit')}}"><i class="glyphicon glyphicon-pencil"></i>Edit</a>
                  <form action="{{url('/schedule',$table->id)}}" method="delete">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{$jdwl->links()}}
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


  </div>
  <!-- End of Main Content -->

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')

  @endsection