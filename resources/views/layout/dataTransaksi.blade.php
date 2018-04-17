@extends ('layout.admin')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
  
    <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a>Data Transaksi</a>
                </li>
              </ol>
  
    <!-- Tables -->
    @yield('tables')

    @yield('tables2')
        </div>
      </div>
@endsection