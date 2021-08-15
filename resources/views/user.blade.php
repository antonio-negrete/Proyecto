@extends('layouts.app')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<div class="card-body">
<center>
    <h1>
        <span id="card_title">
            {{ __('Inventario Productos') }}
        </span>
    </h1>
</center>
</div>

<div class="card-body">
    <table class="table">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </thead>
        <tbody>
            @foreach($inventarios as $inventario)
                <tr>
                    <td>{{ $inventario->id }} </td>
                    <td>{{ $inventario->nombre }} </td>
                    <td>{{ $inventario->precio }} </td>
                    <td>{{ $inventario->descripcion }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
