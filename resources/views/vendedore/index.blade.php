@extends('layouts.app')

@section('template_title')
    Vendedore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Distribuidores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vendedores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Intertar nuevo distribuidor') }}
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
                                        
										<th>Nombre</th>
										<th>Apellidop</th>
										<th>Apellidom</th>
										<th>Distribuidora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendedores as $vendedore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vendedore->nombre }}</td>
											<td>{{ $vendedore->apellidoP }}</td>
											<td>{{ $vendedore->apellidoM }}</td>
											<td>{{ $vendedore->distribuidora }}</td>

                                            <td>
                                                <form action="{{ route('vendedores.destroy',$vendedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vendedores.show',$vendedore->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vendedores.edit',$vendedore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar Distribuidor</a>
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
                {!! $vendedores->links() !!}
            </div>
        </div>
    </div>
@endsection
