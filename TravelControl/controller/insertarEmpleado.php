<?php

    include '../model/conexion.php';


    if (!isset($_POST['empleado']) || !isset($_POST['identificacion']) || !isset($_POST['area'])) {
        exit();
    }

    $empleado= $_POST['empleado'];
    $identificacion= $_POST['identificacion'];
    $area= $_POST['area'];

    
    try {
        $sql = $conexion->prepare("INSERT INTO Empleado (nombreCompleto,identificacion,area) VALUES(?,?,?)");
        $resultado= $sql->execute([$empleado,$identificacion,$area]);

        if ($resultado) {
            echo '<script language="javascript">
            alert("Dato ingresado correctamente");
            window.location.href="../views/empleados.php"</script>';
        }else{
            echo '<script language="javascript">
            alert("Se genero un error inesperado");
            window.location.href="../views/empleados.php"</script>';
        }
        

    } catch (PDOException $e) {

        echo "Error ingresando el registro " . $e->getMessage();
    }
    


?>