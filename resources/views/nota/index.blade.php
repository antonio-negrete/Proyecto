@extends('layouts.app')

@section('template_title')
    Nota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Nota') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nueva Nota') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Observacion</th>
										<th>Fecha</th>
										<th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $nota->observacion }}</td>
											<td>{{ $nota->fecha }}</td>
											<td>{{ $nota->estatus }}</td>

                                            <td>
                                                <form action="{{ route('notas.destroy',$nota->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('notas.show',$nota->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('notas.edit',$nota->id) }}"><i class="fa fa-fw fa-edit"></i> Editar Nota</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $notas->links() !!}
            </div>
        </div>
    </div>
@endsection
