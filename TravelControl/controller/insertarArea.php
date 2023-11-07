<?php

    include '../model/conexion.php';


    if (!isset($_POST['cod']) || !isset($_POST['desc'])) {
        exit();
    }

    $cod= $_POST['cod'];
    $desc= $_POST['desc'];

    
    try {
        $sql = $conexion->prepare("INSERT INTO Area (codigo,descripcion) VALUES(?,?)");
        $resultado= $sql->execute([$cod,$desc]);

        if ($resultado) {
            echo '<script language="javascript">
            alert("Dato ingresado correctamente");
            window.location.href="../views/areas.php"</script>';
        }else{
            echo '<script language="javascript">
            alert("Se genero un error inesperado");
            window.location.href="../views/areas.php"</script>';
        }
        

    } catch (PDOException $e) {

        echo "Error ingresando el registro " . $e->getMessage();
    }
    


?>