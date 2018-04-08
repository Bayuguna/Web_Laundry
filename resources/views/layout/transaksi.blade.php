@extends ('layout.admin')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
  
    <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a>Transaksi</a>
                </li>
              </ol>
    <!-- button -->
                    <a class="btn btn-warning" href="/order">Order</a>
                    <a class="btn btn-primary" href="/proses">Process</a>
                    <a class="btn btn-success" href="/selesai">Selesai</a>
  
    <!-- Tables -->
    @yield('tables')
        </div>
      </div>
@endsection