<?php
$lineas = null;

$mensaje = null;
$total = 0;

$ruta = "archivos/albin.txt";

$manejador = fopen($ruta, 'r');
while (!feof($manejador)){
    $lineas.= fgets($manejador);
    $total++;
}

$mensaje = "El total de filas $ruta es: $total";
fclose($manejador);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $mensaje ?></h3>

    <h3>Contenido</h3>
    <?php echo $lineas ?>


</body>
</html>