@extends ('layout.admin')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb col-md-6">
            <li class="breadcrumb-item">
              <a >Order</a>
            </li>
          </ol>
<!-- Form-->
          <div class="card mb-3 col-md-6">
              <div class="container">
                <div class="row about-container">
        
                  <div class="col-lg-12 col-lg-offset-2 ">
                  <form action="/orderA " method="POST" role="form" class="contactForm">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label> Name :</label>
                       <select name="name" id="name" class="form-control">
                         <option>Nama</option>
                         @foreach($member as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                          @endforeach
                      </select> 
                      <div class="validation"></div>
                    </div>

                   <div class="form-group">
                      <label> Paket :</label>
                      <select name="paket-satuan" id="paket-satuan" class="form-control">
                      @foreach($paket as $row)
                        <option>{{$row->nama_paket}}</option>
                      @endforeach
                      </select>
                   </div>

                   <div class="form-group">
                    <label> Jumlah :</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah"  maxlength="2" placeholder="Jumlah">
                    <div class="validation"></div>
                   </div>

                    <div class="form-group">
                      <label> Note :</label>
                      <textarea class="form-control" name="message" rows="5" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>

                  <div class="form-group">
                    <label> Total :</label>
                    <input type="text" name="total" class="form-control" id="total" readonly/>
                    <div class="validation"></div>
                </div>

                    <div class="form-group"><button type="submit" class="form-control btn btn-primary btn-block ">Proses</button></div>
                  </form>
                  </div>
                  <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                </div>
        
              </div>
          </div>
@endsection