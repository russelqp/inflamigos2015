

<?php
/******************************************************************************/
/*  Copyright (©) 2005 Crop Chile                                             */
/*  EMail form Php                                                            */
/*  info@crop.cl                                                              */
/*                                                                            */
/*  Este script es gratuito, proporcionado por:                               */
/*  Crop Chile                                                                */
/*  Estudio de diseño                                                         */
/*  I + D En comunicación                                                     */
/*  http://www.crop.cl                                                        */
/*                                                                            */
/* Modificado por : Faust -www.faustdesign.com.mx- Viernes 16/01/09
/******************************************************************************/

{
$Nombre = $_POST["nombre"];
$Telefono = $_POST["telefono"];
$Email = $_POST["email"];
$Comentarios = $_POST["mensaje"];
$Opinion = $_POST["opinion"];
$boundary = md5(time().rand(1,100));
$fecha = date("d-M-y H:i");
$content='
<¡Doctype html>
<meta charset="utf-8">
<head>
<title>Formulario de la web de Inflamigos</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body link="/* CCCCCC" vlink="/* FFFFFF" alink="/* CC0033">
<table width="600" height="300" border="0" align="center" >
    
<tr > 
          <td width="100" height="20" align="left" valign="middle"  bgcolor="#CCCCCC"> 
          <img src="http://www.inflamigos.com.mx/email/img/logoinflamigos.png"alt="logo-inflamigos" width="120" height="134" align="middle"></td>
          <td width="450" height="20" colspan="2"><div align="center">Comentarios de la web inflamigos</div></td>
  </tr>
  <tr><td width="550" colspan="3" height="30" bordercolor="#FFFFFF">&nbsp;</td></tr>
  <tr bordercolor="#0099FF"> 
  <td width="100"></td>
    <td width="100" height="20" align="left" valign="middle" bgcolor="#0099FF"> 
    <p class="style1">Nombre:</font></p></td>
<td  height="20" align="left" valign="middle" bgcolor="#00CCFF"> 
    <p>'.$Nombre.'</p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Telefono:</p></td>
                <td height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF" > 
                <p>'.$Telefono.'</p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Correo:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#F0F8FF" > 
                <p><a href="'.$Email.'">'.$Email.'</a></p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Comentarios:</p></td>
                <td  height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#00CCFF" > 
                <p>'.$Comentarios.'</p></td>
  </tr>
             
<tr>
<td width="100"></td> 
                <td width="100" height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#0099FF"> 
    <p>Opinion:</p></td>
<td  height="80" align="left" valign="top" bordercolor="#0099FF" bgcolor="#00CCFF" > 
    <p>'.$Opinion.'</p></td>
  </tr>
              
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Fecha:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                <p>'.$fecha.'</p></td>
  </tr>
  <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>IP:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                <p>'.$_SERVER[REMOTE_ADDR].'</p></td>
  </tr>
         <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Navegador Utilizado:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                <p>'.$_SERVER[HTTP_USER_AGENT].'</p></td>
  </tr>
              <tr> 
              <td width="100"></td>
                <td width="100" height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#0099FF"> 
                <p>Serie:</p></td>
                <td  height="20" align="left" valign="middle" bordercolor="#0099FF" bgcolor="#00CCFF"> 
                '.$boundary.'</p></td>
  </tr>
          
       

  <tr>
  <td width="550" colspan="3" bordercolor="#FFFFFF"><div align="right"><img src="http://www.inflamigos.com.mx/email/img/inflamigos.jpg" alt="inflamigos" width="300" height="172">  </div></td>
  </tr>
</table>
</body>
</html>

';

mail('buzon@inflamigos.com.mx', 'Formulario de contacto',$content,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: $Nombre < $Email >");

$mensaje = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Brincolines Website - Correo recibido</title>
<style type="text/css">
  body
  {
    font-family: "verdana";
    font-size: 16px;
    color:#999;
    width: 100%;
    padding: 0;
    margin: 0 auto;
  }
  section
  {
    width: 90%;
    margin: 0 auto;
    padding: 0;
  }
  header
  {
    width: 100%;
    padding: 2px 5px;
    margin: 5px auto;
    box-sizing: border-box;
  }
  header #logoinflamigos{
    display: inline-block;
    width: 120px;
    margin: 0 auto;
    padding: 0;
  }
  header #logoinflamigos img
  {
    padding: 0;
    margin: 0;
    width: 100%;
  }
  header h1
  {
    color: #fff;
    font-weight: bold;
    font-style: italic;
    width: 70%;
    display: inline-block;
    vertical-align: middle;
    background-color: #e61e3f;
    font-size: 1.2em;
    font-style: italic;
    margin: 0 auto 0 10px;
    padding: 10px;
    float: right;
    clear: both;
    -webkit-box-shadow: 2px 2px 7px 0px rgba(39, 50, 50, 0.75);
    -moz-box-shadow:    2px 2px 7px 0px rgba(39, 50, 50, 0.75);
    box-shadow:         2px 2px 7px 0px rgba(39, 50, 50, 0.75);
  }
  header h1 a, header h1 a:link, header h1 a:visited
  {
    text-decoration: none;
    color: #fff;
  }
  article
  {
    width: 100%;
    display: block;
    margin: 15px auto;
    font-size: 1.8em;
    font-style: italic;
    text-align: left;
  }

  article span a, article span a:link, article span a:hover, article span a:visited
  {
    color: #666;
    text-decoration: none;
  }

  footer
  {
    margin: 30px auto 0 auto;
    border-bottom: 10px solid #e61e3f;
    text-align: center;
    font-size: .8em;
    color: #666;
  }
  #info-contacto
  {
    margin: 15px auto;
    text-align: center;
  }
  footer ul
  {
    width: 250px;
    margin: 0 auto;
    padding: 0;
    list-style: none;
    text-align: center;
    display: block;
  }
  footer ul li
  {
    display: inline-block;
    vertical-align: top;
    width: 10%;
  }
  footer ul li img
  {
    margin: 0;
    padding: 0;
    width: 100%;
  }
</style>
</head>
<body>
<section>
<header>
<div id="logoinflamigos"><a href="http://www.inflamigos.com.mx/" title="Brincolines Inflamigos"><img src="http://www.inflamigos.com.mx/email/img/logoinflamigos.png" alt="logoinflamigos" /></div>
<h1>Buzón - Brincolines Inflamigos</a></h1>
</header>
<article>
<h2>¡Gracias por escribirnos!</h1>
<h3>Hola '.$Nombre.' </h2>
<p>Hemos recibido tu correo, el cuál será atendido y respondido con la mayor brevedad posible. <b>Inflamigos</b> te agradece mucho el habernos contactado.</p>
<span>Este correo confirma su envío efectuado desde nuestro formulario de contacto. 
Si recibes este correo por accidente, por favor, comunícalo a nuestro <a href="mailto: webmaster@inflamigos.com.mx" title="email inflamigos">Administrador.</a></span> 
<p>&nbsp;</p>
</article>

<footer>
<div id="info-contacto">
  <p>Russel Quiam - CEO<br />
Brincolines Inflamigos<br />
Cel. 9841416137<br />
<a href="http://www.inflamigos.com.mx/" title="Brincolines Inflamigos">www.inflamigos.com.mx</a><br />
buzon@inflamigos.com.mx<br /></p>
</div>
<ul div="social">
  <li><a href="https://www.facebook.com/inflamigos" title="Inflamigos Facebook"><img src="http://www.inflamigos.com.mx/img/social-icons/circular/facebook_32.png" alt="facebook_32"/></a></li>
  <li><a href="https://twitter.com/inflamigos" title="Inflamigos Twitter"><img src="http://www.inflamigos.com.mx/img/social-icons/circular/twitter_32.png" alt="twitter_32.png"/></a></li>
  <li><a href="http://www.youtube.com/user/inflamigos" title="Inflamigos Youtube"><img src="http://www.inflamigos.com.mx/img/social-icons/circular/youtube_32.png" alt="yoytube_32.png"/></a></li>
  <li><a href="https://plus.google.com/u/0/b/108078750244157653212/" title="Inflamigos Google+"><img src="http://www.inflamigos.com.mx/img/social-icons/circular/google_32.png" alt="google_32"/></a></li>
  <li><a href="http://vimeo.com/user11306967" title="Inflamigos Vimeo"><img src="http://www.inflamigos.com.mx/img/social-icons/circular/vimeo_32.png" alt="vimeo_32"/></a></li>
  </ul>
<div id="minibanner"><img src="http://www.inflamigos.com.mx/email/img/inflamigos.jpg" alt="minibanner-inflamigos"/></div>
</footer>
</section>
</body>
</html>
';

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Inflamigos WebSite < buzon@inflamigos.com.mx >' . "\r\n";
mail ("$Nombre < $Email >", "Su correo ha sido recibido",$mensaje,$cabeceras);
echo '<Script>alert("¡Mensaje enviado, Gracias =D!")</Script>';
echo "<meta content='0;url=http://www.inflamigos.com.mx/contacto.php' http-equiv='refresh'/>
";
}


?>
