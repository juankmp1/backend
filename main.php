<?php

$palabras = array("sol", "luna","cielo","luz","estrella","lluvia");


$form = "<form action ='analisis.php'>";


for($i = 0; $i < count($palabras);$i++){
    $form .= "la palabra: ".str_shuffle($palabras[$i])." ".
    "<input  class = 'input' type = 'text' name = 'palabra".$i."'>".
    "<br><br>";
}

$button = "<button type = 'submit'>Enviar</button>";
$formCierre = "</form>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
</head>
<body>
    
    <div class="center-text">
    <br> 
        <?= $form.$button.$formCierre ?>
    
    </div>

</body>
</html>
