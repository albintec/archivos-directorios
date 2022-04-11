<?php
$msg = null;
if(isset($_POST["escribir"])) {
    $nombre = $_POST["nombre"];
    $extension = $_POST["extension"];
    $contenido = $_POST["contenido"];

    $ruta = "archivos/".$nombre.$extension;

    $manejador =  fopen($ruta, 'w');

    if(fwrite($manejador, $contenido)){
        $msg ="El archivo fue creado";
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
    <title>Document</title>
</head>
<body>
    <strong><?php echo $msg; ?></strong>
    <form action="" method="post">
     <table>
         <tr>
             <td>Nombre del archivo:</td>
             <td><input type="text" name="nombre"></td> 
        </tr>
        <tr>
         <td>Extensión del Archivo:</td>
         <td>
             <select name="extension">
                 <option value=".txt">.txt</option>
             </select>
        </td>
       </tr>
       <tr>
           <td>Contenido del Archivo:</td>
           <td><textarea name="contenido" cols="30" rows="10"></textarea></td>
       </tr>
     </table>
     <input type="hidden" name="escribir">
     <input type="submit" value="Crear Archivo">

    </form>
</body>
</html>