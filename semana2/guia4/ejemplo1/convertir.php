<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión a binario</title>
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <header>
        <?php 
            if(isset($_POST['convertir']) && strlen($_POST['numero']) > 0){
                $decimal = $_POST['numero'];
            
        ?>
            <h1><?= $decimal; ?>10 convertido a binario</h1>
        <?php
            }
            else{

            }
        ?>
    </header>
    <div class="content">
        <section>
            <article>
                <div class="wrapper">
                    <p>
                        <?php
                            if(isset($_POST['convertir'])){
                                $decimal = $_POST['numero'];
                                if(strlen($decimal) > 0){
                                    $msg = "El numero decimal es: ";
                                    $msg .= "<b>$decimal</b>";
                                    echo $msg;
                                    $binario = '';
                                    do{
                                        $binario = $decimal = $decimal % 2 . $binario;
                                        $msg = "$decimal % 2 = ";
                                        $msg .= "<b>$binario</b>";
                                        echo $msg;
                                        $decimal = (int)($decimal/2);    
                                    }while($decimal > 0);
                                    $msg = "<span class='marked'>Número binario resultante: $binario</span>";
                                    echo $msg;
                                }
                                else{
                                    $prevpage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";
                                    if(strlen($prevpage) == 0){
                                        $prevpage = "decimalbinario.html";
                                    }
                                    $msg = "No ha ingresado dato en el campo de texto. <a href='$prevpage'>Volver a intentar";
                                }
                            }
                        ?>
                    </p>
                </div>
            </article>
        </section>
    </div>
</body>
</html>