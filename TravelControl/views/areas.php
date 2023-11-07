<?php

    require_once '../model/conexion.php';
    require_once 'modales/registrarArea.php';
    require_once 'menu.php';
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container text-center">
        <div class="row m-4">
            <div class="col-4 ">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarArea">
                    Registrar Area
                </button>
            </div>
            <div class="col">
                <div class="row col mb-4">
                    <h2 class="text-danger">Areas</h2>
                </div>
                
                <div class="row col">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php
                            
                            $sql= $conexion->query("select * from Area");
                            $areas = $sql->fetchAll(PDO::FETCH_OBJ);
                            #print_r($consultas);
                            foreach($areas as $area){
                        ?>

                            <tr class="text-center">
                            <th scope="row"><?php echo $area->codigo;?></th>
                            <td><?php echo $area->descripcion;?></td>
                            <td><a href="#<?php echo $area->id;?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="#<?php echo $area->id;?>" class="btn btn-danger">Eliminar</a></td>
                            
                            </tr>
                        <?php }?>  
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        
    </div>

</body>
</html>