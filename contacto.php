 <?php 
 $titlePage="Contacto - Inflamigos";
 $descPage="¡Contáctanos!, en brincolines inflamigos, estamos al pendiente de tus comentarios o sugerencias acerca de nuestros servicios de renta de inflables";
 $btn_activo="contacto";
 ?>
 <?php include('inc/header.php');?>

<section id="section-rounded">
  <article>

    <h3>Contacta a Inflamigos</h3>
    <strong>Siguenos en: <a href="http://www.facebook.com/pages/Playa-Del-Carmen-Mexico/inflamigos/108059039214265?ref=ts" title="ir a nuesta pagina de facebook"><img src="http://www.inflamigos.com.mx/imagenes/mf.png" alt="ico inflamigos facebook" width="60" height="54"/></a><a href="http://www.twitter.com/inflamigos" title="ir a nuesta pagina de twitter"><img src="http://www.inflamigos.com.mx/imagenes/mt.png" alt="ico inflamigos twitter" width="60" height="54"/>  </a> </strong>
  <!--<div id="mapa"> </div>--> 
<div id="contact-area">
<strong>Playa del Carmen, Quintana Roo, México.</strong>
<p>Para mayores informes sobre la renta de brincolines inflables, llama o envianos un whatsapp al número 9841416137 o envianos un mensaje por medio de nuestro formulario de contacto. :)</p>
<br />
  <form method="post" action="../email/sendmail.php">

			
				  <span><input type="text" name="nombre" class="nombre" placeholder="Nombre: "/></span>
				  <span><input type="text" name="telefono" class="telefono" placeholder="Teléfono: "/></span>
				  <span><br /><input type="text" name="email" class="email" placeholder="Email: "/></span>

                   <span>
		            <textarea name="mensaje" id="mensaje" placeholder="Mensaje: " rows="3" ></textarea>
                    </span>
                                        
                      <span><br />
                  <br />
                   <textarea name="opinion" id="opinion" placeholder="¿Cómo podemos mejorar nuestro sitio para ti?"></textarea>
                   </span>
                      <br />
                      <br />
                  <input type="submit" name="submit" value="Enviar" class="submit-button" />

                    </form>
</div>
    <p>&nbsp;</p>

    <blockquote>Brincolines <strong>Inflamigos</strong>, los m&aacute;s divertidos amigos inflables para tus ni&ntilde;os.</blockquote>
<p>&nbsp;</p>
<!--<div class="fb-like-box" data-href="http://www.facebook.com/108059039214265" data-width="240" data-height="232" data-show-faces="true" data-stream="false" data-header="false"></div>-->
 </article>

</section>
<?php include('inc/footer.php');?>