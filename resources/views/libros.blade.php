@extends('templates/base')


@section('body')



<div class="container">
    <div class="card" >
        <h5 class="card-header">Listado en el sistema</h5>
        <div class="card-body">
            <div>
                <div class="col-sm-12">
                    @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                    @endif
                    <div class="col-sm-12">
                        @if($mensaje = \Illuminate\Support\Facades\Session::get('title'))
                        <div class="alert alert-danger" role="alert">
                            {{ $mensaje }}
                        </div>

                        @endif

                        <div class="head">

                            <div class="right">
                                <form action="{{route('items')}}" method="GET">
                                    <div class="btn-group">
                                        <input type="text" name="search" placeholder="Buscar..." class="form-control" value="">
                                        <button type="submit"class="btn btn-primary">Buscar
                                        </button>

                                </form>

                            </div>
                        </div>
                        <div class="left">
                            <a href="/add" class="btn btn-primary">
                                <span class="bi bi-plus"></span>  Agregar nuevo libro
                            </a>
                        </div></div>


                    <hr>



                    <p class="card-text">
                    <div class="table table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Eliminar</th>


                            </thead>


                            <tbody>
                            @foreach($items as $item)

                            <tr>
                                <td>{{$item->id }}</td>
                                <td>{{$item->nombre }}</td>
                                <td>{{$item->autor }}</td>
                                <td>{{$item->categoria->nombre}}</td>

                                <td>


                                    <a href="{{route('edit',$item->id)}}" class="btn btn-warning btn-sm">
                                        <span class="bi bi-pen"></span>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('remove', $item->id) }}" id="{{($item->id)}}">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="bi bi-trash"></span>
                                        </button>
                                    </form>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            const form = document.getElementById("{{($item->id)}}");
                                            form.addEventListener("submit", function(event) {
                                                event.preventDefault();
                                                Swal.fire({
                                                    title: "Estas seguro de eliminar?",
                                                    text: "No podras revertir esto!",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonText: "Si, eliminalo!",
                                                    cancelButtonText: "No, cancelar!",
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        Swal.fire({

                                                            icon: 'success',
                                                            title: 'Eliminado con exito',
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                        })
                                                        form.submit();
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>


                            {{$items-> links()}}

                        </table>



                        <a href="/home" class="btn btn-info">
                            <span class="bi bi-arrow-return-left"></span> Regresar
                        </a>
                        <a href="excel"  class="btn btn-success">
                            <span class="bi bi-file-excel"></span>Excel
                        </a>
                        <a  class="btn btn-primary" href="libros">
                            <span class="bi bi-book" ></span> Mostrar todos los libros
                        </a>


                    </div>

                </div>

            </div>
        </div>



        @endsection

        @section('footer')

        @endsection


