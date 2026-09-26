@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h2 class="display-5 fw-bold text-primary mt-5">Selamat Datang</h2>
                <p>ini adalah halaman utama project laravel web profile</P>
                <a href="{{url('/profile')}}"class="btn btn-success">Lihat Profile</a>
                
            </div>
        </div>
    </div>

@endsection