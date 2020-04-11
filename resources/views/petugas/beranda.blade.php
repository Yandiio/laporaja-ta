@extends('layouts.main')

@php
$totalpengaduan = DB::table('pengaduanmasyarakat')->count();
$totaluser = DB::table('users')->count();
$totalpengaduansudah = DB::table('pengaduanmasyarakat')->where('status', '!=', 'Diproses')->count();
$totalpetugas = DB::table('users')->where('role','=','petugas')->count();
@endphp

@section('content')
<div class="container">
  <div class="row  animated fadeInRight">
    <div class="col-md mb-4">
      <div class="card-header" role="tab" id="headingOne1" style="background-color:#00bcd4;">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
          aria-controls="collapseOne1">
          <h5 class="mb-0 text-white m-1">
            <b>Informasi Aplikasi </b>

          </h5>
        </a>
      </div>
    </div>
  </div>
  <div class="row  wow fadeInRight delay-1s">
    <div class="col-md-12">
      <canvas id="barChart" height="105px"></canvas>
    </div>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-md-4 wow fadeInUp delay-1s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg primary-color ml-4"><i class="fas fa-edit"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">
            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totalpengaduan}} </h5>
            <p class="font-small grey-text">Total Pengaduan</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
    <div class="col-md-4 wow fadeInUp delay-2s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg primary-color ml-4"><i class="fas fa-user"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">

            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totaluser}} </h5>

            <p class="font-small grey-text">Total User</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
    <div class="col-md-4 wow fadeInUp delay-3s">
      <div class="card mb-2">

        <!-- Card Data -->
        <div class="row mt-3">

          <div class="col-md-5 col-5 text-left pl-4">

            <a type="button" class="btn-floating btn-lg primary-color ml-4"><i class="fas fa-user-graduate"
                aria-hidden="true"></i></a>

          </div>

          <div class="col-md-7 col-7 text-right pr-5">

            <h5 class="ml-4 mt-4 mb-2 font-weight-bold">{{$totalpetugas}} </h5>

            <p class="font-small grey-text">Total Petugas</p>
          </div>

        </div>
        <!-- Card Data -->

        <!-- Card content -->
        <div class="row my-3">

          <div class="col-md-7 col-7 text-left pl-4">

            {{-- <p class="font-small font-up ml-4 font-weight-bold">Last month</p> --}}

          </div>

          <div class="col-md-5 col-5 text-right pr-5">

            {{-- <p class="font-small grey-text">145,567</p> --}}
          </div>

        </div>
        <!-- Card content -->

      </div>
    </div>
  </div>
  <hr>
  <div class="row  wow fadeInRight">
    <div class="col-sm-12">
      <!--Accordion wrapper-->
      <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

          <!-- Card header -->
          <div class="card-header" role="tab" id="headingOne1" style="background-color:#00bcd4;">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0 text-white">
                <b>Berita Terkini </b><i class="fas fa-angle-down rotate-icon"></i>
              </h5>
            </a>
          </div>

          <!-- Card body -->
          <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
            data-parent="#accordionEx">
            <div class="card-body">
              <!--Carousel Wrapper-->
              <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-2" data-slide-to="1"></li>
                  <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="view">
                      <img class="d-block w-100"
                        src="https://ybmpln.org/uploads/images/posts/thumbs/5a8a518731-600x300.png" alt="First slide">
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Light mask</h3>
              <p>First text</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100"
                        src="https://ybmpln.org/uploads/images/posts/thumbs/16d38a1b6b-600x300.png" alt="Second slide">
                      <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Strong mask</h3>
              <p>Secondary text</p> --}}
                    </div>
                  </div>
                  <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                      <img class="d-block w-100"
                        src="https://ybmpln.org/uploads/images/posts/thumbs/ebca204ac1-600x300.png" alt="Third slide">
                      <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                      {{-- <h3 class="h3-responsive">Slight mask</h3>
              <p>Third text</p> --}}
                    </div>
                  </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
          </div>
        </div>

          </div>
        </div>
       </div>
    </div>
  </div>
  <div>
    @endsection