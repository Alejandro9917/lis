<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
    <?php 
        session_start();
        $_SESSION['exito'] = '0';
    ?>
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php 
                        $materias = simplexml_load_file('materias.xml');
                        $numerador = 0;
                        $denominador = 0;

                        foreach ($materias->materia as $row) {
                            $denominador += $row->uvs;
                            $numerador += $row->uvs * $row->nota;
                    ?>

                    <tr>
                        <td><?= $row->codigo ?></td>
                        <td><?= $row->nombre ?></td>
                        <td><?= $row->uvs ?></td>
                        <td><?= $row->nota ?></td>
                    </tr>

                    <?php
                        }

                        if($denominador != 0){
                            $cum = round($numerador/$denominador, 1);
                        }
                    ?>
                </tbody>
            </table>

            <?php
                if(isset($cum)){
                    echo "<h2>CUM: $cum</h2>";
                }
            ?>
         
        </div>
    </div>
</div>
<?php include('nuevaModal.php'); ?>
<!-- <script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <?php 
        if($_SESSION['exito'] == '1'){
    ?>
        <script>
            alertify.success('Materia insertada con exito');
        </script>
    <?php    
        }
    ?>
</body>
</html>