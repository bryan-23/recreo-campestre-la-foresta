@extends('layouts.config')
@section('content')
    @include('admin.header')
    <div id="layoutSidenav">
        @include('admin.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header page-header-dark bg-gradient-primary-to-secondary mt-1">
                    <div class="page-header-content">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    SISTEMA DE PEDIDOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>               
                    <div class="container">
                      <hr>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 1
                        </a>
                </div>
            </main>
        </div>
    </div>
@endsection