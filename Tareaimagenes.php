<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css.css">
    <title>Document</title>
</head>
<body>
<h1>Mi Galeria de imagenes</h1>
<div>
    <?php
    $ruta_imagenes = "archivos/";
    $imagenes = opendir($ruta_imagenes);
    while($imagen = readdir($imagenes)){
        if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
            echo "<div class='image-container'>";
            echo "<a href='$ruta_imagenes$imagen' target='_blank'>";
            echo "<img src='$ruta_imagenes$imagen' alt='Imagen'>";
            echo "</a>";
            echo "</div>";
        } 
    }
    closedir($imagenes);
    ?></div>
</body>
</html>
