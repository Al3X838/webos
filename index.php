<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Ejemplo de Formulario Bootstrap</title>
</head>

<body>
    <div class="container">
        <h1>Formulario de Ejemplo</h1>
        <form method="post" >
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe tu nombre">
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" placeholder="example@example.com" name="correo">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena">
            </div>


            <div class="form-group">
                <label for="ayuda">Texto de Ayuda:</label>
                <input type="text" class="form-control" id="ayuda" placeholder="Ayuda" aria-describedby="ayudaTexto">
                <small id="ayudaTexto" class="form-text text-muted">Este es un campo de ayuda.</small>
            </div>
            <button type="submit" class="btn btn-primary" name="registro">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
    <?php
        if(isset($_POST['registro'])){
            $nombre= $_POST ['nombre'];
            $correo= $_POST ['correo'];
            $contrasena= $_POST ['contrasena'];
        
            $insertarDatos = "INSERT INTO datos VALUES('$nombre', '$correo', '$contrasena', '')";

            $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
        }
    ?>
</html>

