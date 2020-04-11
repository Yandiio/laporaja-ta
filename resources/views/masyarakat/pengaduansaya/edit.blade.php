@extends('layouts.main')
@foreach ($pengaduan as $p)
@php
$nama=\App\Models\Jenis::where('id',$p ->jenis_id)->first();
$nama2=\App\Models\User::where('id',$p ->users_id)->first();
$jenis = App\Models\Jenis::all();
@endphp
@section('content')
<div class="row">
    <div class="col-md-7 animated fadeInUp">
        <div class="card">
            <h5 class="card-header primary-color-dark white-text text-center py-4">
                <strong>Detail Pengaduan</strong>
            </h5>
            <!--Card content-->
            <div class="card-body px-lg-5">
        
                <!-- Form -->
                <form class="text-center" style="color: #757575;" method="POST" action="{{route('pengaduansaya.update', $p ->id)}}"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <form role="form" action="{{route('pengaduansaya.store')}}" method="POST" class="text-center"
                        style="color: #757575;" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form">
                            <input name="users" type="hidden" value="{{Auth::user()->id}}" id="inputMDEx" class="form-control">
                            <input name="status" type="hidden" value="{{$p ->status}}" id="inputMDEx" class="form-control">
                        </div>
                        <!-- Name -->
        
                        <div class="md-form">
                            <textarea name="isi_laporan" id="materialContactFormMessage" class="form-control md-textarea"
                                rows="3">{{$p->isi_laporan}}</textarea>
                            <label for="materialContactFormMessage">Ketik Pengaduan Anda...</label>
                        </div>
        
                        <select name="jenis" class="mdb-select md-form colorful-select dropdown-danger">
                            <option value="" disabled selected>Jenis Pengaduan</option>
                            @foreach ($jenis as $j)
                            @php
                            $sel = ($p->jenis_id == $j->id) ? 'selected' : '';
                            @endphp
                            <option value="{{$j ->id}}" {{$sel}}>{{$j ->nama}}</option>
                            @endforeach
                        </select>
        
                        <!-- E-mail -->
                        <!--Blue select-->
                    
        
                        <!--/Blue select-->
        
                        <div class="md-form">
                            <input placeholder="Plih Tanggal..." value="{{$p ->tgl_pelaporan}}" name="tanggal" type="date"
                                id="date-picker-example" class="form-control datepicker">
                        </div>
        
                    
        
                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn danger-color btn-sm float-left">
                                    <span class="white-text"><i class="fas fa-cloud-upload-alt mr-2 white-text"
                                            aria-hidden="true"></i>Pilih File</span>
                                    <input value="{{$p ->foto}}" name="foto" type="file" multiple>
                                </div>
                                <div class="file-path-wrApp\Models\er">
                                    <input class="file-path validate" type="text" placeholder="{{$p->foto}}">
                                </div>
                            </div>
                        </div>
        
                        <!-- Send button -->
                        <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect"
                            type="submit">Kirim</button>
        
        
                    </form>
            </div>
        </div>
    </div>
    <div class="col-md-5 animated fadeInRight delay-1s">
        <div class="card">

            <h5 class="card-header primary-color-dark white-text text-center py-4">
            <strong>Foto Bukti</strong>
            </h5>
        
            <!--Card content-->
            <div class="card-body px-lg-5">
        
                <!-- Form -->
                   <!--Message-->
                   @if (!empty($p ->foto))
                   <img src="{{asset('img')}}/{{$p ->foto}}" alt="thumbnail" class="img-fluid img-thumbnail z-depth-2"
                   width="500px" height="500px">
                   @else
                   <img src="{{asset('img/image_placeholder.jpg')}}" alt="thumbnail" class="img-fluid img-thumbnail z-depth-2"
                   width="500px" height="500px">
                   @endif
        
                    
        
                </form>
                <!-- Form -->
        
            </div>
        
        </div>
    </div>
</div>


@endforeach
<!-- Material form subscription -->
@endsection