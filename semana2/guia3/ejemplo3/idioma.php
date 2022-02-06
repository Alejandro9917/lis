<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detector del lenguaje del navegador</title>

    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="css/idioma.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1 class="emboss">Idioma del navegador</h1>
        </header>
        <section>
            <?php 
                $espanol = "Hola";
                $ingles = "Hello";
                $aleman = "Hallo";
                $frances = "Bonjour";
                $italiano = "Ciao";
                $portuges = "Olá";

                $completo = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
                $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);

                echo "<p>".$completo."<br>";
                echo $idioma."</p>\n";
                if ($idioma == "es"){
                    echo "<p class='msgOff'>";
                    printf("El lenguaje que se está utilizando en el navegador es el Español: %s </p>\n", $espanol);
                }
                elseif ($idioma == "fr"){
                    echo "<p class='msgOff'>";
                    printf("El lenguaje que se está utilizando en el navegador es el Francés: %s </p>\n", $espanol);
                }
                elseif ($idioma == "en"){
                    echo "<p class='msgOff'>";
                    printf("El lenguaje que se está utilizando en el navegador es el Inglés: %s </p>\n", $espanol);
                }
                elseif ($idioma == "de"){
                    echo "<p class='msgOff'>";
                    printf("El lenguaje que se está utilizando en el navegador es el Alemán: %s </p>\n", $espanol);
                }
                elseif ($idioma == "it"){
                    echo "<p class='msgOff'>";
                    printf("El lenguaje que se está utilizando en el navegador es el Italiano: %s </p>\n", $espanol);
                }
                elseif ($idioma == "pt"){
                    echo "<p class='msgOff'>";
                    printf("El lenguaje que se está utilizando en el navegador es el Portugués: %s </p>\n", $espanol);
                }
                else{
                    echo "<p class='msgOff'>";
                    echo "El idioma del navegador es desconocido </p>\n";
                }
            ?>
        </section>
    </div>
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/switchclass.js"></script>
</html>