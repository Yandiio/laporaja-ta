@extends('layouts.main')
@foreach ($pengaduan as $p)
@php
 $nama=\App\Models\Jenis::where('id',$p ->jenis_id)->first();
 $nama2=\App\Models\User::where('id',$p ->user_id)->first();
 $petugas = App\Models\Petugas::all();
@endphp
@section('content')
<!-- Material form subscription -->

<div class="card animated fadeInUp">
    <h5 class="card-header primary-color-dark white-text text-center py-4">
    <strong>Tanggapan</strong>
    </h5>
    <!--Card content-->
    <div class="card-body px-lg-5">

        <!-- Form -->
    <form class="text-center" style="color: #757575;" method="POST" action="{{route('pengaduan.update', $p ->id)}}" enctype="multipart/form-data">
        @method('put')
        @csrf
            <!-- Name -->
            {{-- <div class="md-form mt-3"> --}}
            <input name="jenis" value="{{$p ->jenis_id}}" type="hidden" id="materialSubscriptionFormPasswords" class="form-control" >
            {{-- <input  value="{{$nama ->nama}}" type="text" id="materialSubscriptionFormPasswords" class="form-control" > --}}
                {{-- <label for="materialSubscriptionFormPasswords">Jenis Pengaduan</label> --}}
            {{-- </div> --}}

            <!-- E-mai -->
            {{-- <div  class="md-form"></div> --}}
                <input name="users" value="{{$p ->users_id}}" type="hidden" id="materialSubscriptionFormEmail" class="form-control" >
                {{-- <input  value="{{$nama2 ->name}}" type="text" id="materialSubscriptionFormEmail" class="form-control" > --}}
                {{-- <label for="materialSubscriptionFormEmail">User Pelapor</label> --}}
            {{-- </div> --}}

            {{-- <div  class="md-form"> --}}
                <input name="tgl_pelaporan" value="{{$p ->tgl_pelaporan}}" type="hidden" id="materialSubscriptionFormEmail" class="form-control" >
                {{-- <label for="materialSubscriptionFormEmail">Tanggal</label> --}}
            {{-- </div> --}}

            {{-- <div class="md-form"> --}}
                <textarea name="isi_laporan" id="materialContactFormMessage" class="form-control md-textarea" rows="3" style="display:none;" >{{$p ->isi_laporan}}</textarea>
                {{-- <label for="materialContactFormMessage">Keterangan</label> --}}
            {{-- </div> --}}
            {{-- <input name="foto" type="hidden" value="{{$p->foto}}"> --}}
            <div class="md-form" style="display:none">
                    <div class="file-field">
                            <div class="btn primary-color btn-sm float-left">
                                <span class="white-text"><i class="fas fa-cloud-upload-alt mr-2 white-text"
                                        aria-hidden="true"></i>Pilih File</span>
                                <input value="{{$p ->foto}}" name="foto" type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload foto bukti...">
                            </div>
                        </div>
                    </div>
                {{-- <h3>Bukti</h3> --}}
            {{-- <div class="md-form"> --}}
            {{-- <img src="{{asset('img')}}/{{$p ->foto}}" --}}
                    {{-- class="img-fluid z-depth-1" alt="Responsive image" width="250px" height="250px"> --}}
            {{-- </div> --}}
            {{-- <input name="status" value="Diterima" type="hidden" id="materialSubscriptionFormEmail" class="form-control" > --}}
            <select name="status" class="mdb-select md-form">
                    <option disabled selected>Status</option>
                    <option value="Diterima">Diterima</option>
                    <option value="Ditolak">Ditolak</option>
                  </select>
            <select name="petugas" class="mdb-select md-form">
                    <option disabled selected>Nama Petugas</option>
                    @foreach ($petugas as $p)
                    <option value="{{$p ->id}}">{{$p ->name}}</option>
                    @endforeach
                  </select>

            <div class="md-form mt-4">
                <textarea name="jawaban" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Tanggapan</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Kirim Tanggapan
                </button>

            </form>
    </div>
</div>
@endforeach
<!-- Material form subscription -->
@endsection
