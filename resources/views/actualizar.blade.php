@extends('layouts/main')
@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Editar informacion de registro</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="/historial" class="btn btn-danger">Regresar</a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{ route('update', $items->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-4">
                                    <label for="tipo">Tipo (pago o gasto)</label>
                                    <select name="tipo" id="tipo" class="form-select" required>
                                        <option value="{{ $items->tipo }}">{{ $items->tipo }}</option>
                                        <option value="pago">Pago</option>
                                        <option value="gasto">Gasto</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="categoria">Categoria</label>
                                    <select name="categoria" id="categoria" class="form-select" required>
                                        <option value="{{ $items->categoria }}">{{ $items->categoria }}</option>
                                        <optgroup label="Gastos">
                                        <option value="pasajes">Pasajes</option>
                                        <option value="alimento">Alimento</option>
                                        <option value="gasolina">Gasolina</option>
                                        <option value="recarga de celular">Recarga de celular</option>
                                        <option value="ropa o accesorios">Ropa o accesorios</option>
                                        <option value="pago de luz">Pago de luz</option>
                                        <option value="cuidado personal">Cuidado personal</option>
                                        <option value="emergencia medica">Emergencia medica</option>
                                        <optgroup label="Pagos">
                                        <option value="collares">Collares</option>
                                        <option value="placas">Placas</option>
                                        <option value="ropa">Ropa</option>
                                        <option value="juguetes">Juguetes</option>
                                        <option value="zapatos">Zapatos</option>
                                        <option value="bebederos">Bebederos</option>
                                        <option value="camas">Camas</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $items->cantidad }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4 text-center">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion" id="descripcion" cols="0" rows="0" class="form-control" required>{{ $items->descripcion }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-warning mt-3">Actualizar registro</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
