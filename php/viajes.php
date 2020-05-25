<?php

include_once 'conexion.php';

$sql_leer = 'SELECT * FROM viajes';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

// var_dump($resultado);
//AGREGAR
if($_POST){
    $nombre_viaje = $_POST['nombre_viaje'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];

    $sql_agregar = 'INSERT INTO viajes (nombre_viaje,lugar,fecha) VALUES (?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre_viaje,$lugar,$fecha));

    header('location:viajes.php');
} 

if($_GET){
    $cod_viaje = $_GET['cod_viaje'];
    $sql_unico = 'SELECT * FROM viajes WHERE cod_viaje=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($cod_viaje));
    $resultado_unico = $gsent_unico->fetch();

    //var_dump($resultado_unico);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

    <title>Viajes</title>
  </head>
  <body>
        <div class = "container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <?php foreach($resultado as $dato): ?>

                        <div class="alert alert-primary text-uppercase" role="alert">
                            <?php echo $dato ['nombre_viaje'] ?>
                            -
                            <?php echo $dato ['lugar'] ?>
                            -
                            <?php echo $dato ['fecha'] ?>

                            <a href="eliminar_viaje.php?cod_viaje=<?php echo $dato ['cod_viaje'] ?>"
                            class="float-right ml-3">
                                <i class="fas fa-trash-alt"></i>
                            </a>

                            <a href="viajes.php?cod_viaje=<?php echo $dato ['cod_viaje'] ?>" 
                            class="float-right">
                                <i class="far fa-edit"></i>
                            </a>

                        </div>  
                
                    <?php endforeach ?>
                </div>

                <div class="col-md-6">
                    <?php if(!$_GET):?>
                    <h3>AGREGAR VIAJES</h3>
                    <form method="POST">
                        
                        <input type="text" class = "form-control" name = "nombre_viaje">
                        <input type="text" class = "form-control" name = "lugar">
                        <input type="text" class = "form-control" name = "fecha">
                        <button class = "btn btn-danger mt-3">Agregar</button>
                      
                    </form>
                    <?PHP endif ?>

                    <?php if($_GET):?>
                    <h3>EDITAR VIAJESS</h3>
                    <form method="GET" action="editar_viaje.php">
                        
                        <input type="text" class = "form-control" name = "nombre_viaje" 
                        value="<?php echo $resultado_unico['nombre_viaje']?>">
                        <input type="text" class = "form-control" name = "lugar"
                        value="<?php echo $resultado_unico['lugar']?>">
                        <input type="text" class = "form-control" name = "fecha"
                        value="<?php echo $resultado_unico['fecha']?>">
                        <input type="hidden" name = "cod_viaje"
                        value="<?php echo $resultado_unico['cod_viaje']?>">
                        <button class = "btn btn-danger mt-3">Realizar cambios</button>
                      
                    </form>
                    <?PHP endif ?>
                </div>
            
            </div>
          
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
