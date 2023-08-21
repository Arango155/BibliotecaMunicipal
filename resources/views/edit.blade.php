@extends('templates/base')

@section('body')

<div class="container">

    <div class="card">
        <h5 class="card-header">Editar libro</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{route('update', $item->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">ID</label>
                <input type="text" name="id" class="form-control readonly" required value="{{$item->id}}" readonly>
                <label for="">Nombre del libro</label>
                <input type="text" name="nombre" class="form-control" required value="{{$item->nombre}}">
                <label for="">Autor</label>
                <input type="text" name="autor" class="form-control" required value="{{$item->autor}}">
                <label for="">Categoria</label>
                <select name="categoria_id" class="form-control" required value="{{$item->categoria_id}}">
                    <option value="">Seleccione una categoria</option>
                    @foreach($categoriaitem as $object)
                    <option value="{{ $object->id }}">{{ $object->nombre }}</option>
                    @endforeach
                </select>

                <br>
                <a href="libros" class="btn btn-info">
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
