@extends('layouts/main')
@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Historial de ganancias y gastos</h2>
                    </div>
                    <div class="card-body">
                        <a href="/anadir" class="btn btn-primary">Anadir registro</a>
                        <hr>
                        <table id="historial" class="table table-striped">
                            <thead>
                                <th>Tipo</th>
                                <th>Categoria</th>
                                <th>Cantidad</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->tipo}}</td>
                                    <td>{{$item->categoria}}</td>
                                    <td>{{$item->cantidad}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td><a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Editar</a></td>
                                    <td><a href="{{ route('show', $item->id) }}" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
