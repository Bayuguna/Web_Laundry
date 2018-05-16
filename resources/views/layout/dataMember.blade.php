@extends ('layout.pegawai')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
  
    <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a>Data Member</a>
                </li>
              </ol>
  
    <!-- Tables -->
    @include('include.pesan')
    @yield('tables')
        </div>
      </div>
@endsection