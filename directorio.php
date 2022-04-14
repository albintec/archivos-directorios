<?php
$listar = null;
$directorio = opendir("archivos/");
while($elemento = readdir($directorio)){
    if ($elemento != "." && $elemento != "..") {
    if(is_dir("archivos/".$elemento)){
        $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento/</a></li>";
        
    }else {
        $listar .= "<li><a href='archivos/$elemento' target='_blank'>$elemento</a></li>";
    }
}   
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos2.css">
    <title>Listar directorios</title>
</head>
<body>
    <div class="container-md">
    <h1 class="display-3">Listado de directorios!</h1>
    <ul>
        <?php echo $listar ?>
    </ul>
    <a href="./crear_directorio.php" class="btn btn-secondary btn-sd" role="button" aria-disabled="true">Volver</a>
    </div>
 

    <footer>Elaborado por Albin Ramirez</footer>
</body>
</html>