<?php 
  $msg = null;
  if(isset($_POST["directorio"])){
      $carpeta = $_POST["carpeta"];
      $directorio = "archivos/".$carpeta;


      if(!is_dir($directorio)){
         $crear = mkdir($directorio, 0777, true);

         if($crear) {
             $msg = "Directorio $directorio creado exitosamente";
         }else {
             $msg = "Ha ocurrido un error al crear el directorio";
         }

      }else {
          $msg = "Ya existe el directorio";
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
    <title>Crear Directorio</title>
</head>
<body>
     <strong><?php echo $msg ?></strong>

<div class="container-md">
    <h1 class="display-3">Crear Directorio</h1>
    <form action="" method="post">
     <div class="mb-3">
       <label class="form-label">Directorio/s:</label>
       <input type="text" class="form-control" placeholder="Directorio" name=carpeta>
    </div>
    <input type="hidden" name="directorio">
    <input class="btn btn-primary" type="submit" value="Crear Directorio">
    <a href="./index.php" class="btn btn-secondary btn-sd" role="button" aria-disabled="true">Volver</a>
    <a href="./directorio.php" class="btn btn-info btn-sd" role="button" aria-disabled="true">Listar Directorios</a>

    </form></div>

    <footer>Elaborado por Albin Ramirez</footer>
</body>
</html>