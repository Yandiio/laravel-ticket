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
        <h6 class="m-0 font-weight-bold text-primary">Stasiun Kereta yang terdaftar</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <a href="{{ url('/station/tambah/') }}">
            <button class="btn btn-success">Tambah Data</button>
          </a>
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
            <tfoot>
              <tr>
                <th>No</th>
                <th>Seri</th>
                <th>Nama Stasiun</th>
                <th>Kota</th>
                <th>Alamat</th>
                <th>keterangan</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              @php $no = 1; @endphp
              @foreach($sch as $table)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{$table->nomor}}</td>
                <td>{{$table->nama_stasiun}}</td>
                <td>{{$table->kota}}</td>
                <td>{{$table->alamat}}</td>
                <td>{{$table->keterangan}}</td>
                <td>
                  <a class="btn btn-warning " href="{{url('/station/'. $table->id_stasiun .'/edit')}}"><i
                      class="glyphicon glyphicon-pencil"></i>Edit</a>
                  <form action="{{url('/station',$table->id_stasiun)}}" method="delete">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$sch->links()}}
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @include('sweet::alert')

  </div>
  @endsection