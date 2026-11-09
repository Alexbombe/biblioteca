<!DOCTYPE html>
<html lang="es"> <!-- Cambiado a es para mantener el idioma principal -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo-main.css" rel="stylesheet">

    <title>Registrar libro</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- Contenedor principal centrado -->
    <div class="container d-flex justify-content-center align-items-center py-5" style="min-height: calc(100vh - 90px);">
        
        <div class="card text-bg-dark border-secondary shadow-lg w-100 p-4" style="max-width: 650px; background-color: rgba(33, 37, 41, 0.85) !important; backdrop-filter: blur(5px); border-radius: 12px;">
            
            <h2 class="text-white text-center mb-4" style="font-family: 'Fira Code', monospace, sans-serif; text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.7);">Registro de libro</h2>

            <form action="db.php" method="POST" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label for="titulo" class="form-label text-white fw-bold">Título:</label>
                    <input type="text" class="form-control bg-dark text-white border-secondary" id="titulo" placeholder="Ingrese el título" name="titulo" required>
                    <div class="invalid-feedback">Por favor completa este campo.</div>
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label text-white fw-bold">Autor:</label>
                    <input type="text" class="form-control bg-dark text-white border-secondary" id="autor" placeholder="Ingrese el autor" name="autor" required>
                    <div class="invalid-feedback">Por favor completa este campo.</div>
                </div>

                <div class="mb-3">
                    <label for="publicacion" class="form-label text-white fw-bold">Fecha de registro:</label>
                    <input type="date" class="form-control bg-dark text-white border-secondary" id="publicacion" name="publicacion" required>
                </div>

                <div class="mb-4">
                    <label for="portada" class="form-label text-white fw-bold">Seleccionar archivo o imagen:</label>
                    <input type="file" class="form-control bg-dark text-white border-secondary" id="portada" name="portada">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Guardar Libro</button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>