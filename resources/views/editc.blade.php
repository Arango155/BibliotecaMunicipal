@extends('templates/base')

@section('body')

<div class="container">

    <div class="tab">
        <h3>Editar categoria</h3>

            <p class="card-text">

            <form action="{{route('show', $item->id)}}" method="POST">
                @csrf
                @method("PUT")

                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$item->id}}" readonly>

                <label for="">Nombre de la categoria</label>
                <input type="text" name="nombre" class="form-control" required value="{{$item->nombre}}">

                <br>
                <a href="categorias" class="btn btn-primary">
                    <span class="bi bi-arrow-return-left"></span>
                </a>
                <button type="submit" class="btn btn-primary">
                    <span  class="bi bi-arrow-up-circle-fill"></span>
                </button>

            </form>

            </p>

        </div>
    </div>

</div>

@endsection
