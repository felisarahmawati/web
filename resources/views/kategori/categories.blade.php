@extends('layouts.main')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sahabat Petualang Indramyu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  
   
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
     
     
      
     <!-- Template Main JS File -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/main.js"></script>
</head>
<body>
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
    @foreach($barangs as $barangs)
    <div class="row featured__filter">
      <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/egg-holder.png">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">{{$barangs->nama_barang}}</a></h6>
            <h5>Rp{{$barangs->harga}}</h5>
          </div>
        </div>
      </div>
      @endforeach
      {{-- <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor fastfood">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/doukey-led.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Sleeping Bag</a></h6>
            <h5>Rp10.000</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Sleeping-Bag vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/categories/sleeping1.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Lined Sleeping Bag</a></h6>
            <h5>Rp10.000</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Sleeping-Bag vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/categories/sleeping2.png">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Sleeping Bag carrier</a></h6>
            <h5>Rp10.000</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Lentera-Kompor vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/Nesting_Consina.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Tas Carrier 80lt</a></h6>
            <h5>Rp25.000</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix Tas-Carrier vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/categories/tas2.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Tas Carrier Consina Bearing 60 Liter</a></h6>
            <h5>Rp20.000</h5>
          </div>
        </div>
      </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix Tenda vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/tenda-consina.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
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
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Tenda Flysheet</a></h6>
            <h5>Rp10.000</h5>
          </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix Tenda vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/categories/tenda1.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="/detail"><i class="bi bi-card-text"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Tenda Dome</a></h6>
            <h5>Rp10.000</h5>
          </div>
        </div> --}}
    </div>
    </div>
  </div>
</section>
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
</body>
</html>
@endsection