<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Año bisiesto</title>
    
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/formstyles.css"/>
    <link rel="stylesheet" media="screen" href="css/bisiesto.css">
    <script src="js/validatedata.js"></script>
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
    <?php 
        if(!isset($_POST['enviar'])):
    ?>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" name="frmdatos">
            <h2 class="contact">Años bisiestos</h2>
            <span class="contact">
                <label for="txtdato">Probar año:</label>
            </span>
            <input type="text" name="year" id="year" value="" maxlength="20" placeholder="(Ingrese el dato)" /> <br/>

            <span id="numbersOnly">Ingrese números enteros</span>
            <input type="submit" name="enviar" id="enviar" value="probar" />
        </form>

    <?php 
        else:
            $year = isset($_POST['year']) ? $_POST['year'] : 0;
            
            if(($year%4 == 0 && $year%100 != 0) || $year%400 == 0):
                echo "<p class='bisiesto'>";
                echo "<span style=\"color:Green; font:bold 10 pt 'Lucida Sans'\">El año $year es bisiesto</span><br />\n";
                echo "<span style=\"color:Green; font:bold 10 pt 'Lucida Sans'\"><a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</span>";
                echo "</p>";
            else:
                echo "<p class='bisiesto'>";
                echo "<span style=\"color:Green; font:bold 10 pt 'Lucida Sans'\">El año $year no es bisiesto</span><br />\n";
                echo "<span style=\"color:Green; font:bold 10 pt 'Lucida Sans'\"><a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</span>";
                echo "</p>";
            endif;
        endif;
    ?>
</body>
</html>