<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos recibidos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $motivo = $_POST["motivo"];
        $mensaje = $_POST["mensaje"];
    ?>

    <div class="container">
        <h1>Datos recibidos</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <td><?= $nombre ?></td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td><?= $apellido ?></td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td><?= $correo ?></td>
                    </tr>
                    <tr>
                        <th>Motivo</th>
                        <td><?= $motivo ?></td>
                    </tr>
                    <tr>
                        <th>Mensaje</th>
                        <td><<?= $mensaje ?>/td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>