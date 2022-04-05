<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../images/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top me-2">
        SPA 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{--{{($title ==="Home")? 'active' : ''}}--}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{--{{($title ==="About")? 'active' : ''}}--}}" href="/about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{--{{($title ==="Contact")? 'active' : ''}}--}} " href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{--{{($title ==="Categories")? 'active' : ''}}--}} " href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nv ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color: white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user me-1"></i>{{ auth()->user()->name }} 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <?php
              $pesanan_utama = \App\Models\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                if(!empty($pesanan_utama))
                {
                 $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count(); 
                }
            ?>
            <a class="nav-link" href="{{ url('check-out') }}" style="color: white;">
            <i class="fa fa-shopping-cart"></i>
            @if(!empty($notif))
              <span class="badge badge-danger"> {{ $notif }}</span>
            @endif
            </a>
         </li>
          @else
          <li class="nav-item">
            <a href="/login" style="color: white;" class="nav-link{{("Login")? 'active' : ''}} "><i class="fas fa-user me-1"></i> Login</a>
          </li>
          <li class="nav-item">
            <a href="/register" style="color: white;"  class="nav-link{{("Register")? 'active' : ''}} "><i class="fas fa-sign-in-alt me-1"></i>  Register</a>
          </li>
          @endauth
        </ul>

    </div>
  </nav>