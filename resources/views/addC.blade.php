@extends('templates/base')



@section('title','Agregar nueva categoria')

@section('body')

<div class="container">
    <div class="tab">
            <h3>Agregar categoria</h3>

        <div class="card-body">

            <p class="card-text">
            <form action="/storeC" method="POST">
                @csrf
                <label for="">Codigo de la Categoria</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre de la Categoria</label>
                <input type="text" name="nombre" class="form-control" required>

                <br>
                <a href="home" class="btn btn-info">
                    <span class="bi bi-arrow-return-left"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="bi bi-check"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>
</div>

@endsection
