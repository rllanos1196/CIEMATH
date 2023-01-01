<?php>
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];


$para = "rchilonl15@unc.edu.pe";
$asunto= "Contacto desde nuestra web"

$mensaje = "De_Nombres: $nombre \n";
$mensaje = "E-mail: $email \n";
$mensaje = "Asunto: $asunto \n";

mail($para, $asunto,$mensaje);
header("Location: index.html")
?>

