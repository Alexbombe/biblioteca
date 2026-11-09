<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo-main.css" rel="stylesheet">

    <title>Biblioteca digital</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="container d-flex flex-column justify-content-center align-items-center text-center py-4" style="min-height: calc(100vh - 70px);">
        
        <!-- Ícono -->
        <img src="navbar-icono.png" class="img-fluid mb-2" style="max-width: 200px; height: auto;" alt="Ícono de biblioteca">

        <!-- Título -->
        <h1>Biblioteca de computación</h1>

        <!-- Tarjeta de instrucciones -->
        <div class="card text-bg-dark border-secondary shadow-lg mt-3 w-100" style="max-width: 650px; background-color: rgba(33, 37, 41, 0.85) !important; backdrop-filter: blur(5px);">
            <div class="card-body text-start">
                <h5 class="card-title text-info fw-bold mb-2">📋 Instrucciones del Sistema</h5>
                <p class="card-text mb-0">
                    Este es un sistema exclusivo para los empleados de la biblioteca donde pueden registrar y consultar libros de manera rápida y eficiente.
                </p>
            </div>
        </div>

    </div>

    
</body>
</html>