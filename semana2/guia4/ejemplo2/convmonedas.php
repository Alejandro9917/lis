<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de monedas</title>
    <link rel="stylesheet" href="css/monedas.css">
</head>
<body>
    <header>
        <h2>Tabla de conversión de colones a dólares</h2>
    </header>
    <section>
        <article>
            <?php 
                define("EQUIV", "8.75");
                $colones = 1.00;
                $tabla = "<table><thead><th>Colones</th><th>Dólares</th></thead><tbody>";
                while($colones <= 100){
                    $tabla .= "<tr><td>&cent;";
                    $tabla .= number_format($colones, 2, '.', ',') . "</td><td>";
                    $colones += 0.25;
                    $tabla .= "</td></tr>";
                }
                $tabla .= "</tbody></table>";
                echo $tabla;
            ?>
        </article>
    </section>
</body>
<script src="js/modernizr.custom.lis.js"></script>
</html>