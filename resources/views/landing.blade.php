<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta content='#BE0A31' name='theme-color'/>
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/chat-box.png')}}">
  <title>LaporAja!</title>
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('mdbpro/css/mdb.css')}}" rel="stylesheet">
    <link href="{{('mdbpro/css/bgstyle.css')}}" rel="stylesheet">
</head>

<body> 
<!-- Main navigation -->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('img/chat-box.png')}}" height="30" class="d-inline-block align-top"
            alt="mdb logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('/')}}">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{url('login')}}">Daftar Pengaduan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('tentang')}}">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('tentang')}}">Cara Penggunaan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('navbar')
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('img/landingbg.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12 mb-4 white-text text-center">
              <h2 class="h2-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Apa Itu LaporAja!?</strong></h2>
              <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.5s">
              <h5 class="h5-reponsive mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><p>LaporAja merupakan website pengajuan atau pengaduan oleh pihak yang berwenang untuk menindak menurut Hukum, terhadap seseorang yang telah melakukan Tindak Pidana Aduan yang merugikan.

            </p></h5>
              <a href="{{ url('penggunaan') }}" class="btn btn-outline-white wow fadeInDown animated tada infinite delay-2s" data-wow-delay="0.4s">Cara Penggunaan </a>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>

        
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  

<script type="text/javascript" src="{{('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{('mdbpro/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{('mdbpro/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{('mdbpro/js/mdb.min.js')}}"></script>
<script>
  new WOW().init();
  </script>
</body>

</html>