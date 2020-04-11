@extends('layouts.main')

@section('content')
<!-- Material form subscription -->
<div class="row animated fadeInRight">
        <div class="col-md-12"><a href="{{url('petugas')}}" class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect"
                type="submit">Kembali</a></div>
        </div>  
    
<div class="row">
    <div class="col-md-6 animated fadeInUp">
        <div class="card">

            <h5 class="card-header primary-color-dark white-text text-center py-4">
                <strong>Detail Ustadz</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5">

                <!-- Form -->
                <!-- Name -->
                <div class="md-form">
                    <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control"
                        value="{{$petugas ->id}}" disabled value="id">
                    <label for="materialSubscriptionFormPasswords">Id</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$petugas ->nama}}" disabled name="nama" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Nama</label>
                </div>
                <div class="md-form">
                    <textarea name="alamat" id="form7" disabled class="md-textarea form-control"
                        rows="3">#</textarea>
                    <label for="form7">Alamat</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$petugas->telepon}}" disabled name="telepon" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Telepon</label>
                </div>
                <div class="md-form">
                    <input type="text" value="{{$petugas ->email}}" disabled name="email" id="materialSubscriptionFormEmail"
                        class="form-control">
                    <label for="materialSubscriptionFormEmail">Email</label>
                </div>
                <!-- Form -->

            </div>

        </div>
    </div>
    <div class="col-md-6 animated fadeInRight">
        <div class="card">

            <h5 class="card-header primary-color-dark white-text text-center py-4">
                <strong>Foto Ustadz</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5">

                <!-- Form -->
                <div class="md-form">
                    @if (!empty($petugas ->foto))
                    <img src="{{asset('img')}}/{{$petugas ->foto}}" class="img-fluid img-thumbnail z-depth-2"
                        alt="Responsive image" width="500px" height="500px">

                    @else
                    <img src="{{asset('img/image_placeholder.jpg')}}" class="img-fluid img-thumbnail z-depth-2"
                        alt="Responsive image" width="500px" height="500px">

                    @endif
                </div>



                </form>
                <!-- Form -->

            </div>

        </div>
    </div>
</div>
<!-- Material form subscription -->
@endsection