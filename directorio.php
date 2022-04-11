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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php echo $listar ?>
    </ul>
</body>
</html>