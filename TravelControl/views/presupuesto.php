<?php

    require_once '../model/conexion.php';
    require_once 'modales/modificarPresupuesto.php';
    require_once 'menu.php';
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container text-center">
        <div class="row m-4">

            <div class="col-12 mb-5 ">
                <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#actualizaPresupuesto">
                    ¿Modificar Saldo o Presupuesto?
                </button>
            </div>

            <div class="col-5 mr-2">
                <div class="row col mb-4">
                    <h2 class="text-danger">Presupuesto por Persona</h2>
                </div>
                
                <div class="row col alert alert-primary">
                    
                    <?php
                            
                            $sql= $conexion->query("select * from Presupuesto Where Id=1");
                            $empleados = $sql->fetchAll(PDO::FETCH_OBJ);
                            #print_r($consultas);
                            foreach($empleados as $empleado){
                    ?>

                            <h3>$<?php echo $empleado->presupuesto;?></h3>
                            
                            
                    <?php }?>  
                       
                </div>
                
            </div>
            <div class="col-2">

            </div>
            <div class="col-5 ml-5">

                <div class="row col mb-4">
                    <h2 class="text-danger">Saldo Disponible</h2>
                </div>
                
                <div class="row col alert alert-warning">
                    
                    <?php
                            
                            $sql= $conexion->query("select * from Presupuesto Where Id=1");
                            $empleados = $sql->fetchAll(PDO::FETCH_OBJ);
                            #print_r($consultas);
                            foreach($empleados as $empleado){
                    ?>

                            <h3>$<?php echo $empleado->saldo;?></h3>
                            
                            
                    <?php }?>  
                       
                </div>
                
            </div>
        </div>
        
    </div>

</body>
</html>