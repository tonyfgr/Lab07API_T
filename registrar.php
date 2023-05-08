<?php
//print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["txtNombres"]) || empty($_POST["txtFecha"]) || empty($_POST["txtGenero"]) || empty($_POST["txtEmail"]) || empty($_POST["txtContra"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtCiudad"]) || empty($_POST["txtEstado"])|| empty($_POST["txtCodigo"]) || empty($_POST["txtTelefono"])) {
    header('Location: index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
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

$sentencia = $bd->prepare("INSERT INTO usuarios(nombre_completo,fecha_de_nacimiento,genero,correo_electronico,contrasena,direccion,ciudad,estado,codigo_postal,telefono) VALUES (?,?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$nombre_completo, $fecha_de_nacimiento, $genero, $correo_electronico, $contrasena,$direccion,$ciudad,$estado,$codigo_postal,$telefono]);

if ($resultado === TRUE) {
    header('Location: lista.php?mensaje=registrado');
} else {
    header('Location: lista.php?mensaje=error');
    exit();
}
