@extends('templates/base')


@section('body')



<div class="container">
    <div class="tab" >
        <h3>Listado en el sistema</h3>

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
                                <span>Agregar</span>
                            </a>
                        </p>
                        <hr>

                        <p class="card-text">
                        <div class="table table-responsive">
                            <table class="table table-sm table-bordered">

                                <thead>
                                <th>Id</th>
                                <th>Categoria</th>
                                <th>Acciones</th>

                                </thead>

                                <tbody>
                                @foreach($items as $item)
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <div class="inline">
                                <td>
                                    <div class="flex">
                                    <a href="{{route('modify',$item->id)}}" >
                                        <span>✏️</span>
                                    </a>  <form action="{{ route('destroy', $item->id) }}" id="{{($item->id)}}">
                                        <button type="submit">
                                            <span>  🗑️</span>
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
                                    </div>
                                </td></div>
                                </tbody>
                                @endforeach

                                {{$items-> links()}}
                            </table>



                            <a href="/home" class="btn btn-primary">
                                <span class="bi bi-arrow-return-left"></span>
                            </a>

                        </div>



                        </p>

                    </div>
                </div>
            </div>


            @endsection


