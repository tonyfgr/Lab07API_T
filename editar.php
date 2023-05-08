<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: registro.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from usuarios where id = ?;");
    $sentencia->execute([$codigo]);
    $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($usuarios);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombres completos: </label>
                        <input type="text" class="form-control" name="txtNombres" required 
                        value="<?php echo $usuarios->nombre_completo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha nacimiento: </label>
                        <input type="date" class="form-control" name="txtFecha" autofocus required
                        value="<?php echo $usuarios->fecha_de_nacimiento; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Genero: </label>
                        <input type="text" class="form-control" name="txtGenero" autofocus required
                        value="<?php echo $usuarios->genero; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">email: </label>
                        <input type="text" class="form-control" name="txtEmail" autofocus required
                        value="<?php echo $usuarios->correo_electronico; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="txtContra" autofocus required
                        value="<?php echo $usuarios->contrasena; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required
                        value="<?php echo $usuarios->direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad: </label>
                        <input type="text" class="form-control" name="txtCiudad" autofocus required
                        value="<?php echo $usuarios->ciudad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="txtEstado" autofocus required
                        value="<?php echo $usuarios->estado; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Codigo Postal: </label>
                        <input type="number" class="form-control" name="txtCodigo" autofocus required
                        value="<?php echo $usuarios->codigo_postal; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="number" class="form-control" name="txtTelefono" autofocus required
                        value="<?php echo $usuarios->telefono; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $usuarios->id; ?>">
                        <input type="submit" class="btn btn-outline-dark" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

