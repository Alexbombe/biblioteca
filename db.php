<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo-main.css" rel="stylesheet">

    <title>Libro registrado</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <?php
        // abrimos la conexión.
        $conn = mysqli_connect("db", "usuario", "2004+Aa2004", "biblioteca");

        if( mysqli_connect_errno() ) {
            echo "Failed to connect to MySQL: " . mysqli_connect_errno();
        }

        // generamos automáticamente el ID en secuencia.
        $id = 0;

        $sql_contar = "SELECT COUNT(*) AS total FROM libros;";
        $resultado_contar = mysqli_query($conn, $sql_contar);

        if($resultado_contar) {
            $row_contar = mysqli_fetch_assoc($resultado_contar);

            $id = 1 + $row_contar['total'];
        }

        // obtenemos el resto de las variables del formulario. 
        $titulo = mysqli_real_escape_string($conn, $_POST["titulo"]);
        $autor = mysqli_real_escape_string($conn, $_POST["autor"]);
        $publicacion = $_POST['publicacion'];

        // en tanto a la fecha de publicación tendremos que separa el día, mes y año.
        $anio = date('Y', strtotime($publicacion));
        $mes  = date('m', strtotime($publicacion));
        $dia  = date('d', strtotime($publicacion));

        // reconstruimos la fecha.
        $fecha = "$anio-$mes-$dia";

        // obtenemos el archivo.
        $archivo_nombre = $_FILES['portada']['name'];
        $archivo_temporal = $_FILES['portada']['tmp_name'];
        
        $extension = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
        $nombre_unico = uniqid('libro_') . '.' . $extension;
        
        $carpeta_destino = "uploads/";
        $ruta_servidor = $carpeta_destino . $nombre_unico;

        // creamos el INSERT
        $sql = "INSERT INTO libros(id, autor, titulo, publicacion, portada)
                    VALUES('$id', '$autor', '$titulo', '$fecha', '$ruta_servidor');";

        if( !mysqli_query($conn, $sql) ) {
            die( 'Error: ' . mysqli_error($conn) );
        } else {
            echo '
                <div class="container d-flex justify-content-center align-items-center py-5" style="min-height: calc(100vh - 90px);">
                    <div class="card text-bg-dark border-secondary shadow-lg w-100 p-4" style="max-width: 650px; background-color: rgba(33, 37, 41, 0.85) !important; backdrop-filter: blur(5px); border-radius: 12px;">
                        <h1 class="text-white text-center">¡Libro registrado!</h1>
                    </div>
                </div>
            ';
        }

        /* cerramos la conexión. */
        mysqli_close($conn);
    ?>
</body>
</html>