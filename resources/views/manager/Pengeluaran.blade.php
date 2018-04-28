@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb col-md-6">
            <li class="breadcrumb-item">
              <a >Pengeluaran</a>
            </li>
          </ol>

    <!-- Pendapatan -->
    <div class="card mb-3 col-md-6">
        <div class="container">
          <div class="row about-container">
  
            <div class="col-lg-12 col-lg-offset-3 ">
            <form action="#" method="post" role="form" class="contactForm">
              <div class="form-group">
                <label> From :</label>
              <input type="date" name="from" class="form-control" id="from" data-rule="required"/>
                <div class="validation"></div>
              </div>
              
              <div class="form-group">
                  <label> To :</label>
                  <input type="date" name="to" class="form-control" id="to"  data-rule="required" />
                  <div class="validation"></div>
              </div>

              <div class="form-group float-right">
                <button class="btn btn-success" type="submit">Tampilkan</button>
              </div>
          </div>
  
        </div>
    </div>
    </div>

@endsection