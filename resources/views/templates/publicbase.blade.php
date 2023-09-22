@extends('templates/base')

@section('right')

<div class="spacel"></div>
    <div class="link">
        <div class="nav-item dropdown">
            <span id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </span>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <span class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Salir
                </span>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
