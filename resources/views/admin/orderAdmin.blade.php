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
              <div class="container">
                <div class="row about-container">
        
                  <div class="col-lg-6 col-lg-offset-3 ">
                  <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                      <label> Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name"/>
                      <div class="validation"></div>
                    </div>
                    
                    <div class="form-group">
                      <label> Address</label>
                      <textarea class="form-control" name="address" rows="5" data-msg="Please input address" placeholder="Address"></textarea>
                      <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label> Telp </label>
                        <input type="text" name="telp" class="form-control" id="telp"  data-rule="required" data-msg="Masukkan No Telephone Anda" placeholder="Telephone Number" maxlength="12" />
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                      <label> Paket Kilo </label>
                      <select name="paket-kilo" id="paket-kilo" class="form-control">
                      <option value="Pegawai">Express</option>
                      <option value="Manager">Ordinary</option>
                      </select>
                   </div>

                   <div class="form-group">
                    <label> Berat </label>
                    <input type="text" name="berat" class="form-control" id="berat"  maxlength="2" />
                    <div class="validation"></div>
                   </div>

                   <div class="form-group">
                      <label> Paket Satuan </label>
                      <select name="paket-satuan" id="paket-satuan" class="form-control">
                      <option value="Pegawai">Express</option>
                      <option value="Manager">Ordinary</option>
                      </select>
                   </div>

                   <div class="form-group">
                    <label> Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah"  maxlength="2"/>
                    <div class="validation"></div>
                   </div>

                    <div class="form-group">
                      <label> Note</label>
                      <textarea class="form-control" name="message" rows="5" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>

                  <div class="form-group">
                    <label> Total </label>
                    <input type="text" name="total" class="form-control" id="total" />
                    <div class="validation"></div>
                </div>

                    <div class="form-group"><button type="submit" class="form-control btn btn-primary btn-block ">Proses</button></div>
                  </form>
                  </div>
                  <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                </div>
        
              </div>
    
@endsection