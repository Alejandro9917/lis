<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Factorial de un número</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-offset-2 py-4">
          <h1>Facotiral de un número</h1>

          <?php 
            if(isset($_POST['calcular']))
            {

              $numero = is_numeric($_POST['numero'])?$_POST['numero']:"";
              if($numero=="")
              {
                echo "<div class='alert alert-danger'>Debes ingresar un número</div>";
              }

              else
              {
                $resultado = 1;
                for ($i=1; $i <= $numero ; $i++ ) 
                { 
                  $resultado = $resultado * $i;
                }
              }
            }

            else
            {

            }
          ?>

          <div class="card">
            <div class="card-header">
              Factorial de un Número
              <div class="card-body">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="py-3">
                  <label for="numero" class="form-label">Número</label>
                  <input type="number" name="numero" id="numero" class="form-control">
                  <input type="submit" value="Calcular" name="calcular" class="btn btn-success py-3">
                </form>

                <?php 
                  if(isset($resultado))
                  {
                      echo "<h3>$numero!=$resultado</h3>";
                  }

                  else
                  {

                  }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>