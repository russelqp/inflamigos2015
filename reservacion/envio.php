<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$item = $_POST['item'];
$fecha = $_POST['fecha'];
$para = 'buzon@inflamigos.com.mx';
$titulo = 'Reservacion Rapida';
$header = 'From: ' . $email;
$msjCorreo = "E-Mail: $email\n Nombre:\n $nombre\n Brincolin: $item\n Fecha: $fecha\n";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header, $mensaje)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.inflamigos.com.mx';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
