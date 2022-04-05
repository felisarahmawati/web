@extends('layouts.main')
@section('container')
    <!-- ======= About Section ======= -->
<!-- Content section 1-->
<section id="scroll">
  <div class="container px-5">
      <div class="row gx-5 align-items-right">
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