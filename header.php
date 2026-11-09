<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>

    <!--barra de navegación-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top py-3">
    <div class="container-fluid">
        
        <a class="navbar-brand text-white d-flex align-items-center fs-4 fw-bold" href="main.php">
            <img src="navbar-icono.png" style="width: 100px; height: 100px;" class="me-3">
            Biblioteca de computación
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link fs-5 px-2" href="registrar.php">Registrar un libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 px-2" href="consultar.php">Consultar libros</a>
                </li>
            </ul>

            <!-- Búsqueda -->
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </div>
</nav>
</body>
</html>
