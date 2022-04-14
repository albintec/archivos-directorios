<?php
$msg = null;
$msg2 = null;
if(isset($_POST["escribir"])) {
    $nombre = $_POST["nombre"];
    $extension = $_POST["extension"];
    $contenido = $_POST["contenido"];

    $ruta = "archivos/".$nombre.$extension;

    $manejador =  fopen($ruta, 'w');

    if(fwrite($manejador, $contenido)){
        $msg2 ="El archivo fue creado";
        $msg = "Puedes verlo en ... <a href='$ruta' target='_blank'>$ruta</a>";
    }
    else {
        $msg = "Ha ocurrido un error";
    }

    fclose($manejador);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos2.css">
    <title>Crear Archivo</title>
</head>
<body>
    <strong><?php echo $msg2; ?> <br></strong>
    <strong><?php echo $msg; ?></strong>
    
    <div class="container-md">
    <h1 class="display-3">Crear Archivo</h1>
    <form action="" method="post">
     <div class="mb-3">
       <label class="form-label">Nombre del Archivo:</label>
       <input type="text" class="form-control" placeholder="Nombre" name=nombre>
    </div>
    <div class="mb-3">
       <label class="form-label">Extension del Archivo:</label>
       <select class="form-control" name="extension">
                 <option value=".txt">.txt</option>
        </select>
    </div>
    <div class="mb-3">
       <label class="form-label">Contenido del Archivo:</label>
       <textarea class="form-control" rows="3" name="contenido"></textarea>
    </div>
    
    <input type="hidden" name="escribir">
    <input class="btn btn-primary" type="submit" value="Crear Archivo">
    <a href="./index.php" class="btn btn-secondary btn-sd" role="button" aria-disabled="true">Volver</a>

    </form></div>

    <footer>Elaborado por Albin Ramirez</footer>
</body>
</html>