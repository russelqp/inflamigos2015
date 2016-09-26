 <?php
function urls_amigables($url) {

// Tranformamos todo a minusculas

$url = strtolower($url);

//Rememplazamos caracteres especiales latinos

$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

$repl = array('a', 'e', 'i', 'o', 'u', 'n');

$url = str_replace ($find, $repl, $url);

// Añaadimos los guiones

$find = array(' ', '&', '\r\n', '\n', '+'); 
$url = str_replace ($find, '-', $url);

// Eliminamos y Reemplazamos demás caracteres especiales

$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

$repl = array('', '-', '');

$url = preg_replace ($find, $repl, $url);

return $url;

}
?>

<?php include('../inc/inflable_data.php');?>

<?php
$titlePage=$titulo." - Inflamigos App";
$descPage= $miniDesc;
$btn_activo="brincolines";
$boton_act = 1;


// La variable del título de la noticia
$url = $inflable;
?>



 <?php include('header.php');?>
 
<?php include('../inc/inflable_format.php');?>

<?php include('footer.php');?>
 <?php //Limpia el posible bucle, es decir, se puede volver a hacer el envío.
 $_SESSION['Listo']=0;
 ?> 
