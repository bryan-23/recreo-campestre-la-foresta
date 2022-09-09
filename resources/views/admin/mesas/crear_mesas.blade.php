@extends('layouts.config')
@section('content')
@include('admin.header')

<div id="layoutSidenav">
    @include('admin.sidebar')
    <div id="layoutSidenav_content">
        <br>
<form action="{{route('crear_mesass')}}" method="post"> 
    @csrf
    <input type="text" class="form-control" name="numero">
    <select name="estado" id="" class="form-control">
        <option value="ocupado"> ocupado</option>
        <option value="disponible"> disponible</option>

    </select>
    <button class="btn btn-danger" type="submit">
        crear

    </button>
</form>
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