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
                                    MENUS DETERMINADOS
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            MENU A LA CARTA
                            <a href="/admin/roles/addroles" class="btn btn-primary lift"><i class='bx bxs-bowl-hot'></i>{{ __('Nuevo') }}</a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
                            <form class="input-group">
                                <input name="busqueda" class="form-control me-md-2" type="search"
                                    placeholder="Ingrese nombre" aria-label="Search" autocomplete="off">

                            </form>
                        </div>
                        <div class="card-body py-9">
                            <table class="table table-sm table-bordered table-hover " id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Menu</th>
                                        <th>Usuarios</th>
                                        <th>Costos</th>
                                        <th>Pedidos</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Nombre</td>
                                        <td>Nombre y Apellido</td>
                                        <td>Soles</td>
                                        <td>Activo</td>
                                        
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection