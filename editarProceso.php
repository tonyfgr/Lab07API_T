<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre_completo = $_POST['txtNombres'];
    $fecha_de_nacimiento = $_POST['txtFecha'];
    $genero = $_POST['txtGenero'];
    $correo_electronico = $_POST['txtEmail'];
    $contrasena = $_POST['txtContra'];
    $direccion = $_POST['txtDireccion'];
    $ciudad = $_POST['txtCiudad'];
    $estado = $_POST['txtEstado'];
    $codigo_postal = $_POST['txtCodigo'];
    $telefono = $_POST['txtTelefono'];

    $sentencia = $bd->prepare("UPDATE usuarios SET nombre_completo = ?, fecha_de_nacimiento = ?, genero = ?,correo_electronico = ?,contrasena = ?,direccion = ?,ciudad = ?,estado = ?,codigo_postal = ?,telefono = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre_completo, $fecha_de_nacimiento, $genero, $correo_electronico, $contrasena,$direccion,$ciudad,$estado,$codigo_postal,$telefono,$codigo]);

    if ($resultado === TRUE) {
        header('Location: lista.php?mensaje=editado');
    } else {
        header('Location: lista.php?mensaje=error');
        exit();
    }
