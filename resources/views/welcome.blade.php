@extends('layouts/main')
@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Control de ganancias y gastos</h2>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="row justify-content-between">
                                    <div class="col-4 text-center" style="background-color: green; color:white">
                                        <h4>Total de pagos: {{ $pago }}</h4>
                                    </div>
                                    <div class="col-4 text-center" style="background-color: red; color:white">
                                        <h4>Total de gastos: {{ $gasto }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
