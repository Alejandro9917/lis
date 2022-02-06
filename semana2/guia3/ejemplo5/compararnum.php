<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de palabras</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
    <header>
        <h1>Resultado de la comparación de 
            <?php echo $num1 = isset($_POST['number1']) ? $_POST['number1'] : 0; ?></h1>
            <?php echo $num2 = isset($_POST['number2']) ? $_POST['number2'] : 0; ?></h1>
            <?php echo $num2 = isset($_POST['number2']) ? $_POST['number2'] : 0; ?></h1>
    </header>
    <section>
        <article>
            <p class="msg">
                <?php 
                    $elmayor = ($num1 > $num2) ? $num1 : $num2;
                    $elmayor = ($elmayor > $num3) ? $elmayor : $num3;
                    echo "el mayor número es: ".$elmayor;
                ?>
            </p>
        </article>
    </section>
</body>
</html>