@extends('layout.user')

@section('content')

            <!--==========================
              Hero Section
            ============================-->
            <section id="home">
              <div class="hero-container">
                <h1>Welcome to Jimbaran Laundry</h1>
                <h2>We Are Ready to Serve</h2>
                @guest
                <a class="btn-get-started" href="/login">Sign In</a>
                @else
                <a href="#order" class="btn-get-started">Welcome {{Auth::user()->name}}</a>
                @endguest
              </div>
            </section><!-- #hero -->

            <main id="main">

              <!--==========================
                Order Section
              ============================-->
              @guest

              @else
                  <section id="order">
                      <div class="container">
                        <div class="row about-container">
                
                          <div class="col-lg-6 content order-lg-1 order-2">
                              <h2 class="title">Order</h2>
                          
                          <form method="POST" action="/user" >
                            {{csrf_field()}}
                            <div class="form-group">
                              <label><i class="fa fa-address-card-o fa" aria-hidden="true"></i> Nama</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{Auth::user()->name}}" readonly />
                              <div class="validation"></div>
                            </div>
                            <div class="form-group">
                              <label><i class="fa fa-home fa" aria-hidden="true"></i> Alamat </label>
                              <textarea class="form-control" name="alamat" id="alamat"  rows="3" data-msg="Please enter a valid address" readonly>{{Auth::user()->alamat}}</textarea>
                              <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-phone fa" aria-hidden="true"></i> Telp </label>
                                <input type="text" name="telp" class="form-control" id="telp" value="{{Auth::user()->telp}}" data-rule="required" data-msg="Masukkan No Telephone Anda" maxlength="12" readonly/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                              <label><i class="fa fa-sticky-note-o fa" aria-hidden="true"></i> Memo</label>
                              <textarea class="form-control" name="message" rows="5"  placeholder="Memo"></textarea>
                              <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-block ">Order</button></div>
                          
                            <!--Order Modal-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#159957; color:#fff">
                                      <h5 class="modal-title" id="exampleModalLabel">Order</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">Apakah Anda Ingin Melanjutkan Pemesanan?</div>
                                    <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <button class="btn btn-success" type="submit" >OK</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          
                          </form>
                          </div>
                          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                        </div>
                      
                      </div>
                    </section>
              @endguest  


          @guest
          <!--==========================
                About Section
              ============================-->
              <section id="about">
                <div class="container wow fadeInUp">
                  <div class="section-header">
                    <h3 class="section-title">About Us</h3>
                    <p class="section-description">Jimbaran Laundry</p>
                  </div>
                  <div class="row">

                      <div class="description">
                          <p>
                          Jimbaran Laundry berdiri pada tahun 2018 ahdihaisndahcuafnihciuhsuhuish uhiushf af y8s audfh uisfuhuhbcnaksncanjdajc jabscuabjabjacjsbudhcuhu ushfucuhuehfu cushcu aubuabsjdasc h qhahuabub.
                          </p>
              
                        </div>


                  </div>

                </div>
              </section><!-- #about -->

              <!--==========================
              Call To Action Section
              ============================-->
              <section id="call-to-action">
                <div class="container wow fadeIn">
                  <div class="row">
                    <div class="col-md-9 cta-btn-container text-center">
                      <a class="cta-btn" href="/login">Order Now</a>
                    </div>
                  </div>

                </div>
              </section><!-- #call-to-action -->

              <!--==========================
                Services Section
              ============================-->

              <section id="services">
                <div class="container wow fadeIn">
                  <div class="section-header">
                    <h3 class="section-title">Services</h3>
                    <p class="section-description-p">Jimbaran Laundry</p>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/delivery.png"></img></a></div>
                        <h4 class="title"><a href="">Antar Jemput</a></h4>
                        <p class="description">Menerima Layanan Antar Jemput Sekitaran Bukit Jimbaran </p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/24-logo.png"></img></a></div>
                        <h4 class="title"><a href="">24 Jam</a></h4>
                        <p class="description">Menerima Layanan 24 Jam Non-stop Selama Hari Kerja</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/shirt.png"></img></a></div>
                        <h4 class="title"><a href="">Item's</a></h4>
                        <p class="description">Menerima Layanan Laundry Per Items-nya</p>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/weight-tool.png"></img></a></div>
                        <h4 class="title"><a href="">Kilo's</a></h4>
                        <p class="description">Menerima Layanan Laundry Per Kilonya</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/paket.png"></img></a></div>
                        <h4 class="title"><a href="">Paket</a></h4>
                        <p class="description">Menerima Layanan Express (24 jam) dan Ordinary (48 jam)</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/flower.png"></img></a></div>
                        <h4 class="title"><a href="">Fresh</a></h4>
                        <p class="description">Kami Menjamin 100% Pakaian Anda Menjadi Wangi dan Bersih</p>
                      </div>
                    </div>
                  </div>

                </div>
              </section><!-- #services -->


          @else

          @endguest
          @guest

          @else

          @if($table->count('id') > 0)
              <!--==========================
                Riwayat Section
              ============================-->
              <section id="riwayat">
                  <div class="container wow fadeIn">
                    <div class="section-header">
                      <h3 class="section-title">Status Transaksi</h3>
                      <p class="section-description-p">Jimbaran Laundry</p>
                    </div>

                      <div class="col-md-12 col-md-offset-3">
                                  <div class="card mb-3">
                                    <div class="card-body">
                                      <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Admin</th>
                                              <th>Paket</th>
                                              <th>Total</th>
                                              <th width="120px">Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @php(
                                              $no = 0
                                            )
                                            @foreach($table as $row)
                                            @php(
                                              $no++
                                            )
                                            <tr>
                                              <td>{{$no}}</td>
                                              <td>{{$row->admin->name}}</td>
                                              <td>{{$row->nama_paket}}</td>
                                              <td>{{$row->total_bayar}}</td>
                                              @if($row->status_order == 'order')
                                                <td><span class="badge badge-warning col-md-12">{{$row->status_order}}</span></td>
                                              @elseif($row->status_order == 'proses')
                                                <td><span class="badge badge-primary col-md-12">{{$row->status_order}}</span></td>
                                              @elseif($row->status_order == 'batal')
                                                <td><span class="badge badge-danger col-md-12">{{$row->status_order}}</span></td>
                                              @else
                                                <td><span class="badge badge-success col-md-12">{{$row->status_order}}</span></td>
                                              @endif
                                            </tr>
                                          @endforeach
                                          </tbody>
                                          
                                        </table>
                                      </div>
                                    </div>
                        </div>
                      </div>
                  </div>
                </section><!-- #transaksi -->
              @else

              @endif

              <!--==========================
                Kebijakan Section
              ============================-->

              <section id="kebijakan">
                <div class="container wow fadeIn">
                  <div class="section-header">
                    <h3 class="section-title">Kebijakan</h3>
                    <p class="section-description-p">Jimbaran Laundry</p>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/order-24.png"></img></a></div>
                        <h4 class="title"><a href="">Orderan</a></h4>
                        <p class="description">Jika Dalam Waktu 1x24 jam Orderan Tidak Di Ambil Maka Transaksi Akam Mendapatkan Diskon 10% Dari Total Transaksi</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/cancel.png"></img></a></div>
                        <h4 class="title"><a href="">Batal Transaksi</a></h4>
                        <p class="description">Jika Transaksi Sudah Dalam Proses Maka Transaksi Tidak Dapat Di Batalkan</p>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                      <div class="box">
                        <div class="icon"><a href=""><img src="/img/moneyback.png"></img></a></div>
                        <h4 class="title"><a href="">Uang Kembali</a></h4>
                        <p class="description">Kami Memberikan Garansi Transaksi 3 Kali Lipat dari Pembayaran Transaksi</p>
                      </div>
                    </div>
                    
                </div>
              </section><!-- #services -->
          @endguest

              <!--==========================
                Contact Section
              ============================-->
              <section id="contact" class="section-bg wow fadeInUp">
                  <div class="container">
            
                    <div class="section-header">
                      <h3 class="section-title">Contact Us</h3>
                      <p class="section-description">Jimbaran Laundry</p>
                    </div>
            
                    <div class="row contact-info">
            
                      <div class="col-md-4">
                        <div class="contact-address">
                          <i class="fa fa-home"></i>
                          <h3>Address</h3>
                          <address>Jalan Bingin Sari no 2, Jimbaran</address>
                        </div>
                      </div>
            
                      <div class="col-md-4">
                        <div class="contact-phone">
                          <i class="fa fa-phone"></i>
                          <h3>Phone Number</h3>
                          <p><a href="tel:+62 370 6162456">+62 370 6162456</a></p>
                        </div>
                      </div>
            
                      <div class="col-md-4">
                        <div class="contact-email">
                          <i class="fa fa-envelope"></i>
                          <h3>Email</h3>
                          <p><a href="mailto:laundryjimbaran@gmail.com">laundryjimbaran@gmail.com</a></p>
                        </div>
                      </div>
            
                    </div>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                      </div>
            
                  </div>
                </section><!-- #contact -->

                <div id="map" style="height: 500px; width: 100%; border-top:1px solid darkgray"></div>
                    <script>
                      function initMap() {
                        var jimbaran = {lat: -8.801701, lng: 115.168090};
                        // var jimbaran2 = {lat: -8.796158, lng: 115.176203};
                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 15,
                          center: jimbaran, 
                          // jimbaran2
                        });
                        var marker = new google.maps.Marker({
                          position: jimbaran,
                          map: map
                        });
                        // var marker2 = new google.maps.Marker({
                        //   position: jimbaran2,
                        //   map: map
                        // });
                      }
                    </script>
                    <script async defer
                    src=" https://www.google.co.id/maps/api/js?key=
                    AIzaSyBtLd0gS3tily-lFM38ztLYSs8lZLc2eFY&callback=initMap">
                    </script>

                    @guest

                    @else
                    <section id="pesan" style="padding:20px; border:1px solid #87939c">
                      <div class="container wow fadeInUp">
                        <div class="section-header">
                          <h3 class="section-title">Kritik dan Saran</h3>
                          <p class="section-description">Jimbaran Laundry</p>
                        </div>
                      </div>

                      <div class="container wow fadeInUp">
                        <div class="row justify-content-center">

                          <div class="col-lg-5 col-md-8 pull-right">
                            <div class="form">
                              <form action="/manager" method="POST" >
                                {{csrf_field()}}
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="{{Auth::user()->email}}" data-rule="email" data-msg="Please enter a valid email" readonly/>
                                  <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                                  <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                                  <div class="validation"></div>
                                </div>
                                <div class="text-center"><button class="btn btn-primary tombol" type="submit"><i class="fa fa-paper-plane"></i> Message</button></div>
                              </form>
                            </div>
                          </div>

                        </div>

                      </div>
                    </section><!-- #contact -->
                    @endguest


              </main>

  @endsection

