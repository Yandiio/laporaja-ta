@extends('layouts.main')

@section('content')
<section class="text-center my-5">
  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold mb-4  animated fadeInRight">Proses Pengaduan!!</h2>


        <!-- Section description -->
        <p class="lead grey-text w-responsive mx-auto mb-3"></p>
      <hr>
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12">
      
              <ul class="stepper horizontal horizontal-fix" id="horizontal-stepper-fix">
                  <li class="step active">
                    <div class="step-title waves-effect waves-dark">Tulis Pengaduan</div>
                    <div class="step-new-content">
                      <div class="row">
                        <!-- Card -->
                        <div class="step-content grey lighten-3" style="width:100%;">
                            <p>Laporkan pengaduan atau aspirasi anda dengan jelas dan lengkap</p>
                          </div>
                        <!-- Card -->
                        <!-- Card -->
                      </div>
                  <li class="step">
                    <div class="step-title waves-effect waves-dark">Proses Verifikasi</div>
                    <div class="step-new-content">
                        <div class="row">
                            <!-- Card -->
                            <div class="step-content grey lighten-3" style="width:100%;">
                                <p>Dalam 1 hari, pengaduan Anda akan diverifikasi dan diteruskan kepada yang berwenang</p>
                              </div>
                            <!-- Card -->
                            <!-- Card -->
                          </div>
                    </div>
                  </li>
                  <li class="step">
                    <div class="step-title waves-effect waves-dark">Tindak Lanjut</div>
                    <div class="step-new-content">
                        <div class="row">
                            <!-- Card -->
                            <div class="step-content grey lighten-3" style="width:100%;">
                                <p>Dalam 3 hari, ustadz akan menindaklanjuti dan membalas laporan Anda</p>
                              </div>
                            <!-- Card -->
                            <!-- Card -->
                          </div>
                    </div>
                  </li>
                  <li class="step">
                    <div class="step-title waves-effect waves-dark">Selesai</div>
                    <div class="step-new-content">
                        <div class="row">
                            <!-- Card -->
                            <div class="step-content grey lighten-3" style="width:100%;">
                                <p>Pengaduan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
                              </div>
                            <!-- Card -->
                            <!-- Card -->
                          </div>
                    </div>
                  </li>
                  <li class="step">
                    <div class="step-title waves-effect waves-dark">Duar</div>
                    <div class="step-new-content">
                        <div class="row">
                            <!-- Card -->
                            <div class="step-content grey lighten-3" style="width:100%;">
                                <p>Pengaduan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
                              </div>
                            <!-- Card -->
                            <!-- Card -->
                          </div>
                  </li>
                </ul>
      
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
      </section>
      <!-- Section: Features v.1 -->
@endsection