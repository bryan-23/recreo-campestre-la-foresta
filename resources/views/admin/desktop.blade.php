@extends('layouts.config')
@section('content')
@include('admin.header')

<div id="layoutSidenav">
    @include('admin.sidebar')
    <div id="layoutSidenav_content">
        <div>
            <div class = "text-center">
            <img src="../imagenes/COLLAGE.jpg" alt=""width="1100" height="500">
            </div>
        </div>
        <hr>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright © Your Website 2022</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        ·
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
