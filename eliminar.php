<?php 
    if(!isset($_GET['codigo'])){
        header('Location: registro.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];
    
    $sentencia = $bd->prepare("DELETE FROM promociones WHERE id_usuarios = ?; DELETE FROM usuarios where id = ?;");
    $resultado = $sentencia->execute([$codigo, $codigo]);
    
    if ($resultado === TRUE){
        header('Location: lista.php?mensaje=eliminado');
    } else {
        header('Location: lista.php?mensaje=error');
    }
?>