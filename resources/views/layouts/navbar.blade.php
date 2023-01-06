  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"></span>Mandaue Foam</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">

        @if (url()->current() == url('/'))
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}/login">Login</a></li>
        @else
            <li><a class="nav-link scrollto active" href="{{ url('/') }}#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/') }}#about">About</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/') }}#services">Services</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/') }}#team">Team</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contact</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/login') }}/login">Login</a></li>
        @endif
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
