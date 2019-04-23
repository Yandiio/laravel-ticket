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
    <h1 class="h3 mb-4 text-gray-800">Data Pesawat</h1>

    <div class="card shadow mb-4">  
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data & Spesifikasi pesawat</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <a href="{{ url('/pesawat/tambah/') }}">
          <button class="btn btn-success">Tambah Data</button>
        </a> <br><br>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pesawat</th>
                <th>Nama Pesawat</th>
                <th>Kode Pesawat</th>
                <th>Kapasitas</th>
                <th>Type pesawat</th>
                <th>Maskapai</th>
                <th>Foto Pesawat</th>
                <th>Tahun Pesawat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>ID Pesawat</th>
                <th>Nama Pesawat</th>
                <th>Kode Pesawat</th>
                <th>Kapasitas</th>
                <th>Type pesawat</th>
                <th>Maskapai</th>
                <th>Foto Pesawat</th>
                <th>Tahun Pesawat</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
            @php $no = 1; @endphp
            @foreach($pswt as $table)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{$table->id_pesawat}}</td>
                <td>{{$table->nama_pesawat}}</td>
                <td>{{$table->kode_pesawat}}</td>
                <td>{{$table->kapasitas}}</td>
                <td>{{$table->tipe_pesawat}}</td>
                <td>{{$table->maskapai}}</td>
                <td><img src="{{'image/'.$table->photo}}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                <td>{{$table->tahun_pesawat}}</td>
                <td>
                <a class="btn btn-warning " href="/pesawat/edit/{{$table->id}}">Edit</a>
                <form action="{{ url('/pesawat', $table->id_pesawat ) }}" method="DELETE">
                    {{  csrf_field() }}
					          <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
				          </form>   
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$pswt->links()}}
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