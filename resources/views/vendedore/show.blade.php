@extends('layouts.app')

@section('template_title')
    {{ $vendedore->name ?? 'Show Vendedore' }}
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
                            <a class="btn btn-primary" href="{{ route('vendedores.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $vendedore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidop:</strong>
                            {{ $vendedore->apellidoP }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidom:</strong>
                            {{ $vendedore->apellidoM }}
                        </div>
                        <div class="form-group">
                            <strong>Distribuidora:</strong>
                            {{ $vendedore->distribuidora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
