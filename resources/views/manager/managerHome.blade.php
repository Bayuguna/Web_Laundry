@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Home</a>
            </li>
          </ol>

    <!-- Email -->
              <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-envelope"></i> Email</div>
                  <div class="list-group list-group-flush small">
                   
                    <a class="list-group-item list-group-item-action" href="#">Go To Email</a>
                  </div>
                </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Wich Transaksi Do You Want?</div>
          <div class="modal-footer">
            <a class="btn btn-success btn-block" href="#">Pendapatan</a>
            <a class="btn btn-success btn-block" href="#">Pengeluaran</a>
          </div>
        </div>
      </div>
    </div>
@endsection