@extends('layouts.main')
@section('container')
     <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>SAHABAT PETUALANG ADVENTURE</h1>
      <h4>SPA (SAHABAT PETUALANG ADVENTURE) adalah tempat penyewaan alat mendaki</h4>
      <a href="/about" class="btn-get-started scrollto">Read More</a>
      <img src="images/landingpage2.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="100">
    </div>
  
  </section><!-- End Hero -->
  <section id="scroll">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" src="../images/111.png" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1 text-justify">
                <div class="p-5">
                    <h2 class="display-4">Sahabat Petualang Adventure</h2>
                    <p>SPA (Sahabat Petualangan Adventure) adalah tempat untuk menyewakan alat mendaki.
                      SPA atau dikenal sahabat_petualangan melayani rental perlengkapan pendakian, jasa private trip, dan jasa transportasi pendaki.  
                      </p>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="categories">
    <div class="container">
      <div class="row">
        <div class="categories__slider owl-carousel">
          <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="assets/img/categories/lentera-4800mAh.png">
              <h5><a href="#">Lampu</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="assets/img/categories/matras.jpg">
              <h5><a href="#">Matras</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="assets/img/categories/sleeping-bag-eiger.jpg">
              <h5><a href="#">Sleeping Bag</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="assets/img/categories/tas-carrier.jpg">
              <h5><a href="#">Tas Carrier</a></h5>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="assets/img/categories/tenda-dome.jpg">
              <h5><a href="#">Tenda</a></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="featured spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Barang yang disewakan</h2>
          </div>
          <div class="featured__controls">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".Tenda">Tenda</li>
              <li data-filter=".Tas-Carrier">Tas Carrier</li>
              <li data-filter=".Sleeping-Bag">Sleeping Bag</li>
              <li data-filter=".Lentera-Kompor">Lentera & Kompor</li>
            </ul>
          </div>
        </div>
      </div>
  
      <!-- Produk Start ---->
  
      <div class="row featured__filter">
        <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/egg-holder.png">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">egg holder isi 6</a></h6>
              <h5>Rp8000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor fastfood">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/doukey-led.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Doukey Led</a></h6>
              <h5>Rp15.000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/matras.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Matras</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/lampu-lentera.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Lampu Lentera</a></h6>
              <h5>Rp15.000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/kompor-gasmate.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Kompor Gasmate</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor fastfood">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/lentera-4800mAh.png">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Lentera 4800m Ah</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix Tenda vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tenda-dome.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Tenda Dome isi 6</a></h6>
              <h5>Rp35.000</h5>
            </div>
          </div>
        </div>
              <div class="col-lg-3 col-md-4 col-sm-6 mix Sleeping-Bag vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/sleeping-bag-cosina.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Sleeping Bag</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/Nesting_Consina.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Nesting Consina</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mix Sleeping-Bag vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/sleeping-bag-cozmeedPolar.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Sleeping Bag Cozmeed Polar</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-kompor vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/headlamp.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Headlamp</a></h6>
              <h5>Rp15.000</h5>
            </div>
          </div>
        </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Tas-Carrier vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tas-carrier-cosina.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Tas Carrier Consina</a></h6>
              <h5>Rp25.000</h5>
            </div>
          </div>
        </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Tas-Carrier vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tas-cerrier-rei.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Tas Carrie Rei</a></h6>
              <h5>Rp25.000</h5>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-md-4 col-sm-6 mix Tas-Carrier vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tas-carrier-80lt.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Tas Carrier 80lt</a></h6>
              <h5>Rp25.000</h5>
            </div>
          </div>
        </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Tenda vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tenda-consina.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Tenda Consina</a></h6>
              <h5>Rp35.000</h5>
            </div>
          </div>
        </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Tenda vegetables">
          <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tenda-flysheet.jpg">
              <ul class="featured__item__pic__hover">
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="bi bi-card-text"></i></a></li>
              </ul>
            </div>
            <div class="featured__item__text">
              <h6><a href="#">Tenda Flysheet</a></h6>
              <h5>Rp10.000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2><br>
        <p>Melayani rental perlengkapan pendakian. Melayani jasa PRIVATE TRIP. Melayani jasa transportasi pendaki</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Indramayu</h3>
                <p>Blok.1 RT/01 RW/01 Desa Tunggul Payung, Kec.Lelea</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>SahabatPA@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>0853 2344 6611</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-md-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="/about" class="nav-link px-2 text-muted">About us</a></li>
        <li class="nav-item"><a href="/contact" class="nav-link px-2 text-muted">Contact</a></li>
        <li class="nav-item"><a href="/categories" class="nav-link px-2 text-muted">Categories</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2021 Sahabat_Petualang</p>
    </footer>
  </div>
@endsection
