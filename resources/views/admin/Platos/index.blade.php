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
                    <div class="row">

                        <div class="col mt-4">
                            <div class="card" style="width: 12rem;">
                                <img src="{{ asset('imagenes/disponible.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    @foreach ($listado_mesas as $mesa)
                                        <h5 class="card-title">{{ $mesa->numero }}</h5>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target='#modal{{ $mesa->id }}'>
                                            TOMA PEDIDO
                                            <div class="nav-link-icon"><i class='bx bx-edit'></i></div>
                                        </button>
                                        <span class="badge bg-success">Disponible</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <form action="{{ route('pedidos.store') }}" method="POST">
                            @csrf
                            <div class="modal fade" id='modal{{ $mesa->id }}' data-bs-backdrop="static" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header  ">
                                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">
                                                {{ $mesa->numero }}</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <input type="hidden" id="idMesa" name="numeroMesa"
                                                    value="{{ $mesa->id }}">
                                            </div>

                                            <div class="mb-4">
                                                <div class="form-check form-check-inline">
                                                    <input checked="checked" onclick="handleTypeSelected(event);"
                                                        class="form-check-input" type="radio" name="tipo"
                                                        id="inlineRadio1" value="pedido">
                                                    <label class="form-check-label" for="inlineRadio1">Pedido</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" onclick="handleTypeSelected(event);"
                                                        type="radio" name="tipo" id="inlineRadio2" value="reserva">
                                                    <label class="form-check-label" for="inlineRadio2">Reserva</label>
                                                </div>
                                            </div>
                                            <div class="row  align-items-center">
                                                <div class="col">
                                                    <div class="col-auto">
                                                        <label for="buscar" class="col-form-label">Codigo:</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <input type="text" id="buscar"
                                                            onkeyup="handleProductLooking(event);"
                                                            name="{{ $mesa->id }}" class="form-control"
                                                            placeholder="Ingrese el codigo del producto">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <br>
                                                    <h6 class="small mb-1" for="inputRol">{{ __('Select user') }}</h6>
                                                    <select id="cliente_id" name="cliente_id" class="form-control"
                                                        style="color: #C1BEBE;">
                                                        <option>{{ __('Select') }}</option>
                                                        @foreach ($clientes as $clie)
                                                            <option value="{{ $clie->id }}">
                                                                {{ $clie->pedido->nombre }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <table class="table table-hover">
                                                <thead>
                                                    @foreach ($listado_mesas as $mesa)
                                                    <tr>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Nombre Producto</th>
                                                        <th scope="col">Descripcion</th>
                                                        <th scope="col">Cantidad</th>
                                                        <th scope="col">Precio</th>
                                                        <th scope="col">Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="databody{{ $mesa->id }}" class="table-group-divider">
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5"><strong>TOTAL</strong></td>
                                                        <td><span id="total{{ $mesa->id }}">0</span></td>
                                                        <td><input type="hidden" id="total_pedido{{ $mesa->id }}"
                                                                name="total_pedido" value="0"></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            @endforeach
                                        </div>
                                        <div class="text-center">
                                            <!-- Save changes button-->
                                            <button class="btn btn-primary" type="submit"><em class='bx bx-check'></em>{{ __('Save') }}
                                            </button>
                                            <!-- cancel changes button-->
                                            <form action="{{route('pedidos.index')}}" method="POST">
                                                <a class="btn btn-primary me-md-2" href="{{route('pedidos.index')}}" onclick="return confirm('seguro que desea cancelar?');"><em class='bx bxs-left-arrow-square'></em> {{ __('Cancel') }}</a>
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">CONSTRUCCION DE SOFTWARE 2 2022</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">CONTACTANOS</a>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>
@endsection
