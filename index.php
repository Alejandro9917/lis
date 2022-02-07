<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Prácticas de laboratorio LIS03L</title>
  </head>
  <body>

    <div class="container pt-3">
      <div class="row justify-content-md-center">

        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Semana 1</h5>
            <p class="card-text">Ejercicios de la semana 1</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-week-1">Launch demo modal</button>
          </div>
        </div>
        
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Semana 2</h5>
            <p class="card-text">Ejercicios de la semana 2</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-week-2">Launch demo modal</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-week-1" tabindex="-1" aria-labelledby="modal-week-1-Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Semana 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="list-group">
              <a href="semana1/practica1/HolaMundo.php" class="list-group-item list-group-item-action">Hola mundo</a>
              <a href="semana1/practica1/IngresoDatos.html" class="list-group-item list-group-item-action">Procesar Datos</a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-week-2" tabindex="-1" aria-labelledby="modal-week-2-Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Semana 2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Práctica 2</p>
            <div class="list-group">
              <a href="semana2/practica2/calculadoraCum.php" class="list-group-item list-group-item-action">Calculadora de Cum</a>
              <a href="semana2/practica2/factorial.php" class="list-group-item list-group-item-action">Factorial</a>
              <a href="semana2/practica2/index.php" class="list-group-item list-group-item-action">Index</a>
            </div>
            <p class="pt-3">Guía 3</p>
            <div class="list-group">
              <a href="semana2/guia3/ejemplo1/biciesto.php" class="list-group-item list-group-item-action">Año biciesto</a>
              <a href="semana2/guia3/ejemplo2/salario.php" class="list-group-item list-group-item-action">Salario</a>
              <a href="semana2/guia3/ejemplo3/idioma.php" class="list-group-item list-group-item-action">Idioma</a>
              <a href="semana2/guia3/ejemplo4/fechahora.php" class="list-group-item list-group-item-action">Fecha Hora</a>
              <a href="semana2/guia3/ejemplo5/compararnum.php" class="list-group-item list-group-item-action">Comparar Números</a>
            </div>
            <p class="pt-3">Guía 4</p>
            <div class="list-group">
              <a href="semana2/guia4/ejemplo1/convertir.php" class="list-group-item list-group-item-action">Convertir</a>
              <a href="semana2/guia4/ejemplo2/convmonedas.php" class="list-group-item list-group-item-action">Convertir monedas</a>
              <a href="semana2/guia4/ejemplo3/intervalos.php" class="list-group-item list-group-item-action">Intervalos</a>
              <a href="semana2/guia4/ejemplo4/fechahora.php" class="list-group-item list-group-item-action">Fecha Hora</a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>