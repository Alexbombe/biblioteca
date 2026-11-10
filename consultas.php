<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo-main.css" rel="stylesheet">

    <title>Consultar libros</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container d-flex justify-content-center align-items-center py-5" style="min-height: calc(100vh - 90px);">
        
        <div class="card text-bg-dark border-secondary shadow-lg w-100 p-4" style="max-width: 950px; background-color: rgba(33, 37, 41, 0.85) !important; backdrop-filter: blur(5px); border-radius: 12px;">
            
            <h2 class="text-white text-center mb-4" style="font-family: 'Fira Code', monospace, sans-serif; text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.7);">Libros</h2>

            <div class="table-responsive">
                <?php
                    // Conexión a la base de datos
                    $conn = mysqli_connect("db", "usuario", "2004+Aa2004", "biblioteca");

                    if (mysqli_connect_errno()) {
                        echo '<div class="alert alert-danger">Failed to connect to MySQL: ' . mysqli_connect_errno() . '</div>';
                    }

                    // Consulta de los libros
                    $sql = "SELECT * FROM libros;";
                    $resultado = mysqli_query($conn, $sql);

                    if ($resultado && mysqli_num_rows($resultado) > 0) {
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            // Limpiamos y aseguramos la ruta de la portada
                            $ruta_imagen = htmlspecialchars($row['portada']);
                            
                            echo '
                            <div class="card text-bg-dark border-secondary mb-3 shadow p-3" style="background-color: rgba(33, 37, 41, 0.6) !important; border-radius: 10px;">
                                <div class="d-flex align-items-center">
                                    
                                    <!-- CONTENEDOR DE LA IMAGEN MÁS GRANDE -->
                                    <div class="flex-shrink-0 me-4">
                                        <img src="' . $ruta_imagen . '" alt="Portada del libro" style="width: 120px; height: 160px; object-fit: cover; border-radius: 8px; border: 1px solid #6c757d; box-shadow: 0 4px 8px rgba(0,0,0,0.5);">
                                    </div>

                                    <!-- DATOS DEL LIBRO AL LADO -->
                                    <div class="flex-grow-1">
                                        <h3 class="text-white mb-2 fw-bold" style="font-size: 1.5rem;">' . htmlspecialchars($row['titulo']) . '</h3>
                                        <p class="text-light mb-0" style="font-size: 1.1rem;"><strong>Autor:</strong> ' . htmlspecialchars($row['autor']) . '</p>
                                        <p class="text-light mb-0"><small><strong>Fecha de publicación:</strong> ' . $row['publicacion'] . '</small></p>
                                    </div>

                                </div>
                            </div>
                            ';
                        }
                    } else {
                        echo '<p class="text-center text-secondary py-3">No hay libros registrados en la base de datos.</p>';
                    }

                    // Cierre correcto de la conexión
                    mysqli_close($conn);
                ?>
            </div>

        </div>
    </div>
</body>
</html>