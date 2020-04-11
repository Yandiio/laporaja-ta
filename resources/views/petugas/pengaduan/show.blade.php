@extends('layouts.main')
@php
$nama=\App\Models\Jenis::where('id',$pengaduan ->jenis_id)->first();
$user = \App\Models\User::where('id',$pengaduan->users_id)->first();
$petugas = \App\Models\Petugas::where('id',$pengaduan->petugasa_id)->first();
@endphp

@section('content')
<!-- Material form subscription -->
<div class="row animated fadeInRight">
<div class="col-md-12"><a href="{{url('pengaduan')}}" class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect"
        type="submit">Kembali</a></div>
</div>
<div class="row">
    <div class="col-md-6 animated fadeInUp">
            <div class="card">

                    <h5 class="card-header primary-color-dark white-text text-center py-4">
                        <strong>Detail Pengaduan</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="#!">
                            <!-- Name -->
                            <div class="md-form mt-3">
                                <input value="{{$nama -> nama}}" type="text" id="materialSubscriptionFormPasswords" class="form-control"
                                    disabled>
                                <label for="materialSubscriptionFormPasswords">Jenis Pengaduan</label>
                            </div>

                            <!-- E-mai -->
                            <div class="md-form">
                                <input value="{{ $user->name }}" type="text" id="materialSubscriptionFormEmail" class="form-control"
                                    disabled>
                                <label for="materialSubscriptionFormEmail">User Pelapor</label>
                            </div>

                            <div class="md-form">
                                <input value="{{$pengaduan-> tgl_pelaporan}}" type="email" id="materialSubscriptionFormEmail"
                                    class="form-control" disabled>
                                <label for="materialSubscriptionFormEmail">Tanggal</label>
                            </div>

                            <div class="md-form">
                                <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"
                                    disabled>{{ $pengaduan -> isi_laporan}}</textarea>
                                <label for="materialContactFormMessage">Keterangan</label>
                            </div>

                            @if ( $pengaduan ->status != "Diproses")

                            <button type="button" class="btn btn-primary btn-lg btn-block" disabled>Tanggapan</button>

                                <div class="md-form">
                                <input value="{{ $pengaduan->status }}" type="email" id="materialSubscriptionFormEmail"
                                    class="form-control" disabled>
                                <label for="materialSubscriptionFormEmail">Status</label>
                            </div>
                            <div class="md-form">

                                <input value="{{ $petugas->name }}" type="email" id="materialSubscriptionFormEmail" class="form-control"
                                    disabled>
                                <label for="materialSubscriptionFormEmail">Petugas</label>
                            </div>

                            <div class="md-form mt-4">
                                <textarea name="tanggapan" id="materialContactFormMessage" class="form-control md-textarea" rows="3"
                                    disabled>{{$pengaduan->tanggapan}}</textarea>
                                <label for="materialContactFormMessage">Tanggapan</label>
                            </div>


                        @endif


                        </form>
                        <!-- Form -->

                    </div>

                </div>


    </div>

    <div class="col-md-6 animated fadeInRight">
            <div class="card">

                    <h5 class="card-header primary-color-dark white-text text-center py-4">
                    <strong>Foto Bukti</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5">

                        <!-- Form -->
                            <div class="md-form">
                                @if (!empty($pengaduan ->foto))
                                <img src="{{asset('img')}}/{{$pengaduan ->foto}}"
                                class="img-fluid img-thumbnail z-depth-2" alt="Responsive image" width="500px" height="500px">

                                @else
                                <img src="{{asset('img/image_placeholder.jpg')}}"
                                class="img-fluid img-thumbnail z-depth-2" alt="Responsive image" width="500px" height="500px">

                                @endif
                            </div>



                        </form>
                        <!-- Form -->

                    </div>

                </div>
    </div>
</div>
</div>


<!-- Material form subscription -->
@endsection
