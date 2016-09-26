<?php
$phone = $_POST['phone'];
$nombre = $_POST['nombre'];
$item = $_POST['item'];
$fecha = $_POST['fecha'];
$para = 'info@inflamigos.com.mx';
$titulo = 'Reservacion Rapida Acuaticos';
$header = 'From: ' . $phone;
$msjCorreo = "Telefóno: $phone\n Nombre:\n $nombre\n Brincolin: $item\n Fecha: $fecha\n";
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.inflamigos.com.mx/categoria/diversion-acuatica/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
