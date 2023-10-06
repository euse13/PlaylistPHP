<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Canciones</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="index.css">
    <!-- Agrega tu archivo de estilos CSS personalizado (si lo tienes) -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Listado de Canciones</h1>
        <div class="row text-center">
            <div class="col">
                <h2>Canciones</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center" style ='border: 1px solid black'>
                <h5>Nombre</h5>
                 </div>
                 <div class="col text-center" style ='border: 1px solid black'>
                <h5>Artista</h5>
                 </div>
                 <div class="col text-center" style ='border: 1px solid black'>
                <h5>Genero</h5>
                 </div>
                <?php
                require_once 'includes/FuncionesPhp.php';
                require_once 'includes/FuncionesBB.php';

                $canciones = getAllSongs();

              
                    foreach ($canciones as $cancion) {
                         echo '<div class="row "><div class = "col text-center" style ="border: 1px solid black">' . $cancion['name'] . '</div><div class="col text-center"   style ="border: 1px solid black">' . $cancion['artist'] . '</div><div class="col text-center"   style ="border: 1px solid black">' . $cancion['genre'] . '</div></div>';
                        

                    }
              
                ?>
          
            </div>
        </div>
    </div>
</body>
</html>
