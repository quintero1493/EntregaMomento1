<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SueldoPostobon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">SUELDO POSTOBON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
        </nav>

<div class="card bg-dark text-white">
    <div class="card-img-overlay" align="center">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
<form class="needs-validation" action="sueldopostobon.php" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
    <font color="black">
      <label for="validationCustom01">Horas Ordinarias Semalanes</label>
    </font>
      <input type="text" class="form-control" name="horasordinarias">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-6 mb-3">
    <font color="black">
      <label for="validationCustom02">Horas Extras Semanales</label>
    </font>
      <input type="text" class="form-control" name="horasextras">
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
                             $horasordinarias=$_POST["horasordinarias"];
                             $horasextras=$_POST["horasextras"];                          
                                                                    
                             if($horasordinarias=="40"){
                                 $resultado1=$horasordinarias*20000;
                                echo("Su sueldo Semanal Es: " .$resultado1);
                                
                            }else if ($horasordinarias>"40"){                                
                                $resultado2=$horasextras*25000;                                
                                $resultadototal=800000+$resultado2;
                                echo("Su sueldo incluye ".$horasextras ." horas extras y el total de su sueldo es: " .$resultadototal);            
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

</head>
<body>
    
</body>
</html>