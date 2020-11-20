<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Bodytech</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/be37145aa7.js" crossorigin="anonymous"></script>
</head>
<body>
    
<header>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#"> <i class="fas fa-calculator"></i> CONTROL INDICE DE MASA CORPORAL </a>
</nav>

<div class="card bg-dark text-white">
        <img src="img/bodytech.jpg" class="card-img" alt="...">
    <div class="card-img-overlay" align="center">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
<form class="needs-validation" action="bodytech.php" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
    <font color="black">
      <label for="validationCustom01">Nombres</label>
    </font>
      <input type="text" class="form-control" id="validationCustom01">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-6 mb-3">
    <font color="black">
      <label for="validationCustom02">Apellidos</label>
    </font>
      <input type="text" class="form-control" id="validationCustom02">
      <div class="valid-feedback">
      </div>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-6 mb-3">
    <font color="black">
      <label for="validationCustom02">Peso</label>
    </font>
      <input type="text" class="form-control" name="peso">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-6 mb-3">
    <font color="black">
      <label for="validationCustom02">Estatura</label>
    </font>
      <input type="text" class="form-control" name="altura">
      <div class="valid-feedback">
      </div>
    </div>
  </div>
    
  <button class="btn btn-primary" type="submit" name="botoncalcular">Calcular </button>
</form>

<?php if(isset($_POST["botoncalcular"])):     
            
?>
            <font color="black">
            <h4> <?php echo("Estas Haciendo Clic en Calcular") ?> </h4>  
            
            <h4> 
                <?php                     
                 $altura=$_POST["altura"];
                 $peso=$_POST["peso"];                                
                 $resultado=($peso/($altura*$altura));
                 echo("Su IMC Es: " .$resultado);

                 if($resultado<"18.5"){
                    echo(" .Peso Insuficiente");
                    
                }else if ($resultado>="18.5" && $resultado<="24.9"){
                    echo(" .Normopeso");

                }else if ($resultado>="27" && $resultado<="29.9"){
                    echo(" .Sobrepeso Grado II (preobesidad)");

                }else if ($resultado>="30" && $resultado<="34.9"){
                    echo(" .Obesidad Tipo I");

                }else if ($resultado>="35" && $resultado<="39.9"){
                    echo(" .Obesidad Tipo II");

                }else if ($resultado>="40" && $resultado<="49.9"){
                    echo(" .Obesidad Tipo III (Morbida)");

                }else if ($resultado>"50"){
                    echo(".Obesidad Tipo VI (Extrema). Mucho Juicio");
                }
                ?>
                
            </h4>
            </font>
            <?php  endif ?>

    </div>
    </div>
    </div> 
    </div>
</div>



</header>

<br>
<br>


</body>
</html>
