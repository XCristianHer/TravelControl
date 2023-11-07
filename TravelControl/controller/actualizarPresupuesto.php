<?php

    include '../model/conexion.php';


    if (!isset($_POST['pre']) || !isset($_POST['saldo'])) {
        exit();
    }

    $pre= $_POST['pre'];
    $saldo= $_POST['saldo'];
    $id=1;


    
    try {

        $sql = $conexion->prepare("UPDATE Presupuesto SET presupuesto = ? , saldo = ? WHERE id=?");
        $resultado= $sql->execute([$pre,$saldo,$id]);

        if ($resultado) {
            echo '<script language="javascript">
            alert("Datos actualizados correctamente");
            window.location.href="../views/presupuesto.php"</script>';
        }else{
            echo '<script language="javascript">
            alert("Se genero un error inesperado");
            window.location.href="../views/presupuesto.php"</script>';
        }
        

    } catch (PDOException $e) {

        echo "Error actualizando el registro " . $e->getMessage();
    }
    


?>