@extends('templates.base')



@section('right')

<div class="links">
    <form action="{{ route('login') }}">
        <button class="btn btn-dark" type="submit">Iniciar sesión</button>
    </form>    <form action="{{route('register')}}">
        <button class="btn btn-dark" type="submit">Regístrate</button>
    </form>

</div>
@endsection

@section('body')



    <div class="content">
        <h1>Consultoria en linea</h1>
        <p>"Desbloquee conocimientos, un clic a la vez: ¡su biblioteca, a su manera!"</p>
        <form action="register">

            <button class="btn btn-primary">Comienza ahora!</button>
        </form>

        <div class="video">

        </div>
</div>

@endsection
