@extends('templates/base')

@section('body')

<div class="container">

    <div class="card">
        <h5 class="card-header">Editar categoria</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{route('show', $item->id)}}" method="POST">
                @csrf
                @method("PUT")

                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$item->id}}" readonly>

                <label for="">Nombre de la categoria</label>
                <input type="text" name="nombre" class="form-control" required value="{{$item->nombre}}">

                <br>
                <a href="categorias" class="btn btn-info">
                    <span class="bi bi-arrow-return-left"></span> Regresar
                </a>
                <button type="submit" class="btn btn-warning">
                    <span  class="bi bi-arrow-up-circle-fill"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

</div>

@endsection
