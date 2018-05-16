@extends ('layout.pegawai')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
  
    <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a>Transaksi</a>
                </li>
              </ol>
              @include('include.pesan')
    <!-- button -->
                    <a class="btn btn-warning" href="/transaksi">Transaksi</a>
                    <a class="btn btn-primary" href="/proses">Proses</a>
                    <a class="btn btn-success" href="/selesai">Selesai</a>
  
    <!-- Tables -->
    @yield('tables')
        </div>
      </div>
@endsection