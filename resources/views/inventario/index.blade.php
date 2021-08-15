@extends('layouts.app')

@section('template_title')
    Inventario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventario Productos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Insertar nuevo Producto') }}
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
										<th>Precio</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarios as $inventario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventario->nombre }}</td>
											<td>{{ $inventario->precio }}</td>
											<td>{{ $inventario->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('inventarios.destroy',$inventario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventarios.show',$inventario->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Producto</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventarios.edit',$inventario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar Producto</a>
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
                {!! $inventarios->links() !!}
            </div>
        </div>
    </div>
@endsection
