@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? 'Show Nota' }}
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
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $nota->observacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $nota->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $nota->estatus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
