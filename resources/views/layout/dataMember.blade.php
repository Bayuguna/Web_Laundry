@extends ('layout.admin')

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
    @yield('tables')
        </div>
      </div>
@endsection