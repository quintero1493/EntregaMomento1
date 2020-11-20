<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESCUENTOS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/be37145aa7.js" crossorigin="anonymous"></script>
</head>
<body>
<header>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#"> <i class="fas fa-calculator"></i> DESCUENTO DE LA COMPRA </a>
</nav>

<div class="card bg-dark text-white">
  <img src="img/spring.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" align="center">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-8">
<form class="needs-validation" action="ventazapatos.php" method="POST">
<div class="col-md-3 mb-3">
      <label for="validationCustom04">Cantidad De Pares De Zapatoa</label>
      <select class="custom-select" name="cantzapatos">
        <option selected disabled value="">Choose...</option>
        <option>de 1 a 3</option>
        <option>de 4 a 7</option>
        <option>de 8 a 12</option>
       
      </select>
      <div class="invalid-feedback">
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Precio Par de Zapatos #1</label>
      <input type="text" class="form-control" name="zapatos1">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Precio Par de Zapatos #2</label>
      <input type="text" class="form-control" name="zapatos2">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Precio Par de Zapatos #3</label>
      <input type="text" class="form-control" name="zapatos3">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Precio Par de Zapatos #4</label>
      <input type="text" class="form-control" name="zapatos4">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Precio Par de Zapatos #5</label>
      <input type="text" class="form-control" name="zapatos5">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Precio Par de Zapatos #6</label>
      <input type="text" class="form-control" name="zapatos6">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Precio Par de Zapatos #7</label>
      <input type="text" class="form-control" name="zapatos7">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Precio Par de Zapatos #8</label>
      <input type="text" class="form-control" name="zapatos8">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Precio Par de Zapatos #9</label>
      <input type="text" class="form-control" name="zapatos9">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Precio Par de Zapatos #10</label>
      <input type="text" class="form-control" name="zapatos10">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Precio Par de Zapatos #11</label>
      <input type="text" class="form-control" name="zapatos11">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Precio Par de Zapatos #12</label>
      <input type="text" class="form-control" name="zapatos12">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="botoncalcular">CALCULAR</button>
</form>

<?php if(isset($_POST["botoncalcular"])):     

$op=$_POST["cantzapatos"];
          
?>
                        <font color="Yellow">
                        <h4> <?php echo("Estas Haciendo Clic en Calcular") ?> </h4>  
                        
                        <h4> 
                            <?php   
                             switch($op)
                             {
                                 case "de 1 a 3":
                                     $zapatos1=$_POST["zapatos1"];
                                     $zapatos2=$_POST["zapatos2"];  
                                     $zapatos3=$_POST["zapatos3"];                              
                                     $resultado=$zapatos1+$zapatos2+$zapatos3;
                                     $resultado2=$resultado-($resultado*0.1);
                                     echo("Su precio a pagar es: " .$resultado2);
                                 break;

                                 
                                  case "de 4 a 7":
                                      $zapatos1=$_POST["zapatos1"];
                                      $zapatos2=$_POST["zapatos2"];
                                      $zapatos3=$_POST["zapatos3"];
                                      $zapatos4=$_POST["zapatos4"];
                                      $zapatos5=$_POST["zapatos5"];
                                      $zapatos6=$_POST["zapatos6"];  
                                      $zapatos7=$_POST["zapatos7"];                         
                                      $resultado=$zapatos1+$zapatos2+$zapatos3+$zapatos4+$zapatos5
                                      +$zapatos6+$zapatos7;
                                      $resultado2=$resultado-($resultado*0.2);
                                      echo("Su precio a pagar es: " .$resultado2);
                                  break;

                                  case "de 8 a 12":
                                    $zapatos1=$_POST["zapatos1"];
                                    $zapatos2=$_POST["zapatos2"];
                                    $zapatos3=$_POST["zapatos3"];
                                    $zapatos4=$_POST["zapatos4"];
                                    $zapatos5=$_POST["zapatos5"];
                                    $zapatos6=$_POST["zapatos6"];  
                                    $zapatos7=$_POST["zapatos7"];
                                    $zapatos8=$_POST["zapatos8"]; 
                                    $zapatos9=$_POST["zapatos9"]; 
                                    $zapatos10=$_POST["zapatos10"]; 
                                    $zapatos11=$_POST["zapatos11"]; 
                                    $zapatos12=$_POST["zapatos12"];                          
                                    $resultado=$zapatos1+$zapatos2+$zapatos3+$zapatos4+$zapatos5
                                    +$zapatos6+$zapatos7+$zapatos8+$zapatos9+$zapatos10
                                    +$zapatos11+$zapatos12;
                                    $resultado2=$resultado-($resultado*0.5);
                                    echo("Su precio a pagar es: " .$resultado2);
                                break;
      
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
</body>
</html>