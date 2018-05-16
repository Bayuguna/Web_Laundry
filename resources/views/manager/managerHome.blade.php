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

        <div class="row">
          <div class="col-lg-8">

            <!-- Pegawai Card-->
              <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-3">
                      <div class="card-header" style="background: #34e89e">
                        <i class="fa fa-address-card-o"></i> Pegawai</div>
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-user"></i>
                          </div>
                          <h3><strong>{{$admin->count('id')}}</strong> Pegawai</h3>
                        </div>
                      <div class="list-group list-group-flush small">
                          <a class="list-group-item list-group-item-action" href="/pegawaiM">Go To Page <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                  </div>
      
                  <!-- Member Card-->
                  <div class="col-md-6">
                    <div class="card mb-3">
                      <div class="card-header" style="background: #56CCF2">
                        <i class="fa fa-address-card"></i> Member</div>
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fa fa-fw fa-user"></i>
                          </div>
                          <h3><strong>{{$member->count('id')}}</strong> Member</h3>
                        </div>
                      <div class="list-group list-group-flush small">
                          <a class="list-group-item list-group-item-action" href="/memberM">Go To Page <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                  </div>
                </div>

            <!-- Email-->
            <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-envelope"></i> Message</div>
                  <div style="max-height:210px; overflow-x: auto">
                    @foreach($message2 as $row)
                      <a class="list-group-item list-group-item-action">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body row">
                              <div class="col-md-8">
                                <strong>{{$row->email}}</strong> has sent E-mail
                                <p><span>{{$row->message}}</span></p>
                                <div class="text-muted smaller">At {{$row->created_at}}</div>
                              </div>
                              <div class="col-md-4">
                                @if($row->status == 'blm_dilihat')
                                  <button type="button" data-toggle="modal" data-target="#showModal_{{$row->id}}" class="btn btn-default pull-right" style="margin-top:15px"><i class="fa fa-eye"></i></button>
                                @else
                                  <button type="button" data-toggle="modal" data-target="#showModal_{{$row->id}}" class="btn btn-default pull-right" style="margin-top:15px"><i class="fa fa-eye-slash"></i></button>
                                @endif
                              </div>
                                
                                
                          </div>
                        </div>
                      </a>

                      <!--Show Modal-->
                    <div class="modal fade" id="showModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-body proses">
                              <form action="/manager/{{$row->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                              <div class="form-group">
                                  <label> E-Mail :</label>
                                    <input type="email" name="email" class="harga form-control" id="email" value="{{$row->email}}" disabled />
                                  <div class="validation"></div>
                              </div>
    
                              <div class="form-group">
                                  <label> Subject :</label>
                                    <input type="text" name="subject" class="jumlah form-control" id="subject" value="{{$row->subject}}" readonly>
                                  <div class="validation"></div>
                              </div>
            
                              <div class="form-group">
                                <label> Message :</label>
                                  <textarea type="text" name="message" rows="6" class="total form-control" id="message" readonly>{{$row->message}}</textarea>
                            </div>
                            <div class="form-group">
                              @if($row->status == 'blm_dilihat')
                                <button type="submit" class="form-control btn btn-primary"><i class="fa fa-eye"></i></button>
                              @else
                                <button type="submit" class="form-control btn btn-secondary"><i class="fa fa-eye-slash"></i></button>
                              @endif
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    </div>
                    @endforeach
                  </div>
                  
                <div class="list-group list-group-flush small">
                    <a class="list-group-item list-group-item-action" href="https://mail.google.com/mail/u/1/#inbox">Go To Email <i class="fa fa-angle-right"></i></a>
                  </div>
              </div>
              
          </div>
          
          <div class="col-lg-4">
              <!-- Keuangan-->
              <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-money"></i> Keuangan</div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-center my-auto">
                            <div class="h4 mb-0 text-primary">Rp. {{number_format($pendapatan->sum('total_bayar'))}} -,</div>
                            <div class="small text-muted">Pemasukan</div>
                            <hr>
                            <div class="h4 mb-0 text-warning">Rp. {{number_format($pendapatan->sum('modal'))}} -,</div>
                            <div class="small text-muted">Pengeluaran</div>
                            <hr>
                            <div class="h4 mb-0 text-success">Rp. {{number_format($pendapatan->sum('total_bayar')-$pendapatan->sum('modal'))}} -,</div>
                            <div class="small text-muted">Pendapatan</div>
                          </div>
                    </div>
                  </div>
                  <div class="card-footer small text-muted">Last updated at 
                    <div class="pull-right">
                        {{$pendapatan->max('updated_at')}}  
                    </div>
                  </div>
                </div>
            </div>
        </div>
@endsection