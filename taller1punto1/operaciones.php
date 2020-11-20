<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OperacionesBasicas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/be37145aa7.js" crossorigin="anonymous"></script>

</head>
<body>

<header>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#"> <i class="fas fa-calculator"></i> Operaciones Basicas </a>
</nav>
</header>

<br>
<br>

<header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
        <form class="#" action="operaciones.php" method="POST">
        <h4 class="text-center">OPERACIONES MATEMATICAS</h4>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Num 1" name="numero1">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Num 2" name="numero2">
                </div>
                <div class="form-group">
                
                <select class="form-control" name="opciones">
                <option value="sumar">Suma</option>
                <option value="restar">Resta</option>
                <option value="mult">Mult</option>
                <option value="div">Dividir</option>                
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5" name="botoncalcular">Calcular</button>
         </form> 
         
         <?php if(isset($_POST["botoncalcular"])): 
         
         $op=$_POST["opciones"];
            
        ?>
                
                <font color="black">
                <h4> <?php echo("Estas Haciendo Clic en Calcular") ?> </h4>
                <h4> 
                    <?php 
                    switch($op)
                        {
                            case "sumar":
                                $numero1=$_POST["numero1"];
                                $numero2=$_POST["numero2"];                                
                                $resultado=$numero1+$numero2;
                                echo("La Suma Es: " .$resultado);
                            break;

                            case "restar":
                                $numero1=$_POST["numero1"];
                                $numero2=$_POST["numero2"];                                
                                $resultado=$numero1-$numero2;
                                echo("La Resta Es: " .$resultado);
                            break;

                            case "mult":
                                $numero1=$_POST["numero1"];
                                $numero2=$_POST["numero2"];                                
                                $resultado=$numero1*$numero2;
                                echo("La Multiplicacion Es: " .$resultado);
                            break;

                            case "div":
                                $numero1=$_POST["numero1"];
                                $numero2=$_POST["numero2"];                                
                                $resultado=$numero1/$numero2;
                                echo("La Division Es: " .$resultado);
                            break;
                        }
                    
                    ?> 
                </h4>
                </font>
                <?php  endif ?>

        </div>  
    </div>
</div>
</header>


</body>
</html>