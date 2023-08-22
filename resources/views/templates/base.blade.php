<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="https://mapasdeguatemala.com/wp-content/themes/wp-bootstrap-starter/map_app/image/adds/Municipalidad%20de%20Puerto%20Barrios.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />

</head>
<body>




<!--nav section-->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div>
                <img src="https://mapasdeguatemala.com/wp-content/themes/wp-bootstrap-starter/map_app/image/adds/Municipalidad%20de%20Puerto%20Barrios.png" width="80px" height="90px">

            <span class="navbar-brand mb-0 h1">Biblioteca Municipal</span>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                    <span>Menu</span>
            </button>
        </div>

    </nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <header>
          <a href="home"><i class="bi bi-house"></i></a>
        </header>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div id="select" class="offcanvas-body d-flex flex-column justify-content-between px-0">
            <ul class="navbar-nav fs-5 justify-content-evenly">
                <li class="nav-item p-3 py-md-1">
                    <a href="libros" class="navlink">Libros</a>
                </li>
                <li class="nav-item p-3 py-md-1">
                    <a href="categorias" class="navlink">Categorias</a>
                </li>
                <li class="nav-item p-3 py-md-1">
                    <a href="list" class="navlink">Lista de libros</a>
                </li>

            </ul>
            <!-- enlaces redes sociales -->




        </div>
    </div>

<!--    redes sociales-->

</div>


@yield('body')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@yield('footer')
</div>
</div>
</div>
<div class="space"></div>
<footer>


    <div class="contact">
        <a href="https://wa.me/54403980" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
        <a href="https://github.com/Arango155" target="_blank">
            <i class="bi bi-github"></i>
        </a>
        <a
            href="https://www.linkedin.com/in/josue-arango-289b03198/"
            target="_blank"
        >
            <i class="bi bi-linkedin"></i>
        </a>
        <a
            href="https://www.youtube.com/channel/UCI4nEkfMPVLZHZ8_6m9XOcQ"
            target="_blank"
        >
            <i class="bi bi-youtube"></i>
        </a>
        <a href="https://www.instagram.com/jos.arango/" target="_blank">
            <i class="bi bi-instagram"></i>
        </a>

        <a href="https://arangoportfolio.netlify.app/">
            <i class="bi bi-file-earmark-person"></i>
        </a>

    </div>
    <h5 class="no">Desarrollado por: Josue Arango</h5>
    <br>
</footer>

</body>


</html>
