@extends('layouts.app')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
    <div class="jumbotron jumbotron-fluid text-center" style="background-color: rgba(0, 0, 0, 0.1);">
        <div class="container">
            <h1 class="display-4">Sistema Inventario</h1>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row bg-white">
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://thumbs.dreamstime.com/b/iconos-planos-del-dise%C3%B1o-de-los-productos-electr%C3%B3nicos-de-consumo-fijados-67804678.jpg" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                     <a href="{{route('inventario.index')}}" class="btn btn-primary">Productos</a>
                </div>
                <br>
            </div>
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://image.flaticon.com/icons/png/512/1496/1496134.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                <a href="{{route('vendedores.index')}}" class="btn btn-primary">Distribuidores</a>
                </div>
                <br>
            </div>
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://i.pinimg.com/originals/af/a3/42/afa34299c2939dfc98962cfeaad4b083.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                    <a href="{{route('clientes.index')}}" class="btn btn-primary">Clientes</a>
                </div>
                <br>
            </div>
            <div class="col">
                <br>
                <div class="text-center">
                    <img src="https://image.flaticon.com/icons/png/512/252/252324.png" class="img-thumbnail">
                </div>
                <br>
                <div class="text-center">
                <a href="{{route('notas.index')}}" class="btn btn-primary">Notas y Observaciones</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</body>
