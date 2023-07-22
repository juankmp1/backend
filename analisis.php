

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center-text"> 

            <?php $palabras = array("sol", "luna","cielo","luz","estrella","lluvia"); ?>
            
            <?php for ($i = 0; $i < count($palabras); $i++):               
                $palabra_ingresada = $_REQUEST["palabra".$i];?>
                <?php if($palabra_ingresada == $palabras[$i]):?>
                    <p> La palabra ingresada es correcta <br><br></p>
                
                <?php else:?>
                    <p class="mistake" >La palabra ingresada: <?=$palabra_ingresada?> es incorrecta, la palabra correcta es:
                    <?=$palabras[$i]?><br><br></p>
                
                <?php endif;?>
            <?php endfor; ?>
        
        
    </div>
</body>
</html>