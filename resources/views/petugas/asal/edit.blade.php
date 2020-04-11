@extends('layouts.main')

@section('content')
<!-- Material form subscription -->
<div class="card">

    <h5 class="card-header primary-color-dark white-text text-center py-4">
        <strong>Edit Data Kategori</strong>
    </h5>
    @foreach ($edit as $a)
    <!--Card content-->
    <div class="card-body px-sm-5">

        <!-- Form -->
        <form role="form" method="POST" class="text-center" style="color: #757575;" action="{{route('asal.update', $a ->id)}}">
            @method('put')
            @csrf
            <!-- Name -->
            <div class="md-form">
            <input type="text" name="id" id="materialSubscriptionFormPasswords" class="form-control" value="{{($a ->id)}}" disabled>
                <label for="materialSubscriptionFormPasswords">ID</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
            <input type="text" name="nama" id="materialSubscriptionFormEmail" class="form-control" value="{{( $a ->nama)}}" autofocus>
                <label for="materialSubscriptionFormEmail">Nama</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect"
                type="submit" name="proses">Submit</button>

        </form>
        <!-- Form -->

    </div>
    @endforeach

</div>
<!-- Material form subscription -->
@endsection