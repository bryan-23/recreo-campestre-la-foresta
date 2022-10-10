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
                        @foreach ($listado_mesas as $mesa)
                            <div class="col mt-4">
                                <div class="card" style="width: 12rem;">
                                    <img src="{{ asset('imagenes/disponible.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $mesa->numero }}</h5>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target='#modal{{ $mesa->id }}'>
                                            Editar
                                        </button>
                                        <span class="badge bg-success">Disponible</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id='modal{{ $mesa->id }}' tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{ $mesa->numero }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{route('recerva.store')}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="productos" class="form-label">Productos disponibles</label>
                                                <input type="hidden" name="mesa" value={{ $mesa->id }}>
                                                <select class="form-select" name="producto" aria-label="Selecciona el Producto">
                                                    @foreach ($lista_productos as $producto)
                                                        <option value={{$producto->id}}>Producto: {{$producto->nombre}} - Precio: {{$producto->precio}} - Stock: {{$producto->stock}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="mb-3">
                                                    <label for="cantidad" class="form-label">Cantidad</label>
                                                    <input type="number" name="cantidad" class="form-control" id="cantidad"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>

    </div>
@endsection
