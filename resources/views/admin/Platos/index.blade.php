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
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 2
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 3
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 4
                        </a>
</hr>
                    </div>

                    <div class="container">
                    <hr>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 5
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 6
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 7
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 8
                        </a>
</hr>
                    </div>

                    <div class="container">
                    <hr>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 9
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 10
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 11
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 12
                        </a>
</hr>
                    </div>

                    <div class="container">
                    <hr>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 13
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 14
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 15
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 16
                        </a>
</hr>
                    </div>

                    <div class="container">
                    <hr>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 17
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 18
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 19
                        </a>
                        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
                            MESA 20
                        </a>
</hr>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection