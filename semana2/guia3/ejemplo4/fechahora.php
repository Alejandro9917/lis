<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y hora del sistema</title>
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="css/fechahora.css" />
</head>
<body>
    <?php 
        date_default_timezone_set("America/El_Salvador");
        $dia = date("w");
        
        switch ($dia) {
            case 0: $dia="Domingo"; break;
            case 1: $dia="Lunes"; break;
            case 2: $dia="Martes"; break;
            case 3: $dia="Miércoles"; break;
            case 4: $dia="Jueves"; break;
            case 5: $dia="Viernes"; break;
            case 6: $dia="Sábado"; break;
        }

        $mes = date("n");
        switch ($mes) {
            case 1: $mes="Enero"; break;
            case 2: $mes="Febrero"; break;
            case 3: $mes="Marzo"; break;
            case 4: $mes="Abril"; break;
            case 5: $mes="Mayo"; break;
            case 6: $mes="Junio"; break;
            case 7: $mes="Julio"; break;
            case 8: $mes="Agosto"; break;
            case 9: $mes="Septiembre"; break;
            case 10: $mes="Octubre"; break;
            case 11: $mes="Noviembre"; break;
            case 12: $mes="Diciembre"; break;
        }

        $numero = date("j");
        $anio = date("Y");
        $hora = date("g:i a");
        printf("<header>\n");
        printf("\t<div class='box box3 shadow3'>\n");
        printf("\t\t<p>Hoy es %s, %d de %s del %d \n</p>\n", $dia, $numero, $mes, $anio);
        echo "\t</dvi>\n";
        echo "</header><section><article><div class='box box4 shadow4'>";
        printf("<p>Son las: %s</p>", $hora);
        echo "</div></article></section>";
    ?>
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/prefixfree.min.js"></script>
</html>