@extends('layout.user')

@section('content')

  <!--==========================
    Hero Section
  ============================-->
  <section id="home">
    <div class="hero-container">
      <h1>Welcome to Jimbaran Laundry</h1>
      <h2>We Are Ready to Service</h2>
      @guest
      <a href="/login" class="btn-get-started">Sign In</a>
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
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <label><i class="fa fa-address-card-o fa" aria-hidden="true"></i> Name</label>
              <input type="text" name="name" class="form-control" id="name" value="{{Auth::user()->name}}" readonly />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label><i class="fa fa-home fa" aria-hidden="true"></i> Address </label>
                <textarea class="form-control" name="alamat" id="alamat"  rows="3" data-msg="Please enter a valid address">{{Auth::user()->alamat}}</textarea>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                  <label><i class="fa fa-phone fa" aria-hidden="true"></i> Telp </label>
                  <input type="text" name="telp" class="form-control" id="telp" value="{{Auth::user()->telp}}" data-rule="required" data-msg="Masukkan No Telephone Anda" maxlength="12"/>
                  <div class="validation"></div>
              </div>
              <div class="form-group">
                <label><i class="fa fa-sticky-note-o fa" aria-hidden="true"></i> Note</label>
                <textarea class="form-control" name="message" rows="5" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success btn-block ">Order</button></div>
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
    
     <!--==========================
      Riwayat Section
    ============================-->

    <section id="riwayat">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Riwayat Transaksi</h3>
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
                                    <th>No. Transaksi</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
              </div>
            </div>
        </div>
      </section><!-- #transaksi -->
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
  
    </main>

  @endsection

