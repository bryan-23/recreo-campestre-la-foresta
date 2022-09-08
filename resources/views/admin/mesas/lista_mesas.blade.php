@extends('layouts.config')
@section('content')
@include('admin.header')

<div id="layoutSidenav">
    @include('admin.sidebar')
    <div id="layoutSidenav_content">
        <br>
       <div class="container">
    
        <a class="btn btn-blue" href="{{route('crear_mesa')}}">
            crear mesa
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        numero
                    </th>
                    <th>
                        estado
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lista_de_mesas as $item)
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->numero}}
                        </td>
                        <td>
                            {{$item->estado}}
                        </td>
                    </tr>
                @endforeach
            </tbody>

           </table>
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