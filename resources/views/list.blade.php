@extends('templates/adminbase')





@section('body')

<div class="container">
    <div class="head">

        <div class="right">
            <form action="{{route('buscar')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="search" placeholder="Buscar..." class="form-control" value="">
                    <button type="submit"class="btn btn-primary"><i class="bi bi-search"></i>
                    </button>

            </form>

        </div>
    </div>
    <div class="left">

        <a  class="btn btn-primary" href="list">
            <span class="bi bi-arrow-clockwise" ></span>
        </a>
    </div></div>
<div class="size">
<div class="row"> @foreach($items as $item)
    <div class="col space">
        <div class="card element" >
            <img src="{{$item->img}}" class="card-img-top" alt="Imagen de libro">
            <div class="card-body">
                <h3 class="card-title">{{$item->nombre }}</h3>
                <h5 class="card-title">{{$item->categoria->nombre}}</h5>
                <p class="card-text">Autor: {{$item->autor}}</p>
                <p class="card-text">Estado: {{$item->estado->nombre}}</p>

                @if($item->estado->id==1)
                <button class="btn btn-success">Disponible</button>
                @elseif($item->estado->id==2)
                <button class="btn btn-warning">Ocupado</button>
                @elseif($item->estado->id==3)
                <button class="btn btn-danger">No disponible</button>
                @endif

                <a href="#" id="{{$item->id}}" class="btn btn-primary">Consultar</a>
            </div>
        </div>
    </div>
    @endforeach
</div>





@endsection

@section('footer')

@endsection
