@extends('templates/base')


@section('body')



<div class="container">
    <div class="card" >
        <h5 class="card-header">Listado en el sistema</h5>
        <div class="card-body">
            <div class="row">
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
                        <!---->
                        <!---->
                        <!--            </div>-->
                        <!--            -->
                        <!--        </div>-->
                        <p>
                            <a href="/addC" class="btn btn-primary">
                                <span class="bi bi-plus"></span>  Agregar nueva categoria
                            </a>
                        </p>
                        <hr>

                        <p class="card-text">
                        <div class="table table-responsive">
                            <table class="table table-sm table-bordered">

                                <thead>
                                <th>Id</th>
                                <th>Categoria</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                </thead>

                                <tbody>
                                @foreach($items as $item)
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>
                                    <a href="{{route('modify',$item->id)}}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                </td>
                                <td>


                                    <form action="{{ route('destroy', $item->id) }}" id="{{($item->id)}}">
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
                                </tbody>
                                @endforeach

                                {{$items-> links()}}
                            </table>



                            <a href="/home" class="btn btn-info">
                                <span class="bi bi-arrow-return-left"></span> Regresar
                            </a>

                        </div>



                        </p>

                    </div>
                </div>
            </div>


            @endsection


