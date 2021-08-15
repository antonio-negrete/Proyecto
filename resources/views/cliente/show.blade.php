@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidop:</strong>
                            {{ $cliente->apellidoP }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidom:</strong>
                            {{ $cliente->apellidoM }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
