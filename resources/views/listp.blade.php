@extends('templates/basep')

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
            <span class="bi bi-bootstrap-reboot" ></span>
        </a>
    </div></div>
<div class="size">
    <div class="row"> @foreach($items as $item)
        <div class="col space">
            <div class="card element" >
                <img src="https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.webp?b=1&s=170667a&w=0&k=20&c=mBzy59I9bsnIZovbYsdUWVntwTFpbOAa3TTByYo7lG4=" class="card-img-top" alt="Imagen de libro">
                <div class="card-body">
                    <h3 class="card-title">{{$item->nombre }}</h3>
                    <h5 class="card-title">{{$item->categoria->nombre}}</h5>
                    <p class="card-text">Autor: {{$item->autor}}</p>

                    <a href="#" class="btn btn-primary">Consultar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>





    @endsection

    @section('footer')

    @endsection
