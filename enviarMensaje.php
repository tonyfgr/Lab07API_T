<?php
if (!isset($_GET['codigo'])) {
    header('Location: index.php?mensaje=error');
    exit();
}

include 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("SELECT pro.promocion, pro.duracion , pro.id_usuarios, per.nombre_completo ,per.telefono , per.fecha_de_nacimiento 
  FROM promociones pro 
  INNER JOIN usuarios per ON per.id = pro.id_usuarios 
  WHERE pro.id = ?;");
$sentencia->execute([$codigo]);
$usuarios = $sentencia->fetch(PDO::FETCH_OBJ);

    require_once 'twilio-php-main/src/Twilio/autoload.php';
    use Twilio\Rest\Client;

    $sid    = "ACcc56d8db0700855fdf8de6b47e9f11de";
    $token  = "ae56f2f2e811e79e88b27725442d9de4";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
      ->create("whatsapp:+51$usuarios->telefono", // to
        array(
          "from" => "whatsapp:+14155238886",
          "body" => "Estimado(a) $usuarios->nombre_completo  No se pierda $usuarios->promocion valido solo $usuarios->duracion",
	        "mediaUrl" => array("https://i.imgur.com/geOhySb.png")
        )
      );

print($message->sid);
   header('Location: agregarPromocion.php?codigo='.$usuarios->id_usuarios);
?> 



