@extends('layouts.app')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"> Data Booking</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Booking User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Booking</th>
              <th>Tanggal Booking</th>
              <th>Jenis Transport</th>
              <th>Biaya</th>
              <th>Status</th>
            </tr>
          </thead>
          <tfoot>
          <tr>
              <th>No</th>
              <th>Kode Booking</th>
              <th>Tanggal Booking</th>
              <th>Jenis Transport</th>
              <th>Biaya</th>
              <th>Status</th>
            </tr>
          </thead>
          </tfoot>
          <tbody>
            <tr>
              @php $no = 1; @endphp
              <td>{{ $no++ }}</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
            </tr>
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
<!-- End of Content Wrapper -->

</div>


@endsection