		 <?php
			 $titlePage="Servicios - Inflamigos";
			 $descPage="En inflamigos contamos ademas de los brincolines, con otros servicios, como renta de Toldos y Skydancers.";
			   $btn_activo="servicios";
			 ?>
			 <?php include('inc/header.php');?>


			 <section id="catalogo">
<article>
<h3>Servicios</h3>
<figure class="miniserv">
  <a href="<?php echo $Myurl; ?>brincolines/" title="Catálogo de Brincolines">
  <img src="<?php echo $Myurl; ?>imagenes/inflamigos-renta-de-brincolines.jpg" alt="Brincolines" />
  </a>
  <a href="<?php echo $Myurl; ?>brincolines/" title="Catálogo de Brincolines">
  <h4>Renta de Brincolines</h4>
  </a>
  <figcaption>Gran variedad de brincolines: Escaladoras, Castillos, Tobogan, Chapoteadero, Slides.</figcaption>
   <p><a href="<?php echo $Myurl; ?>brincolines/" title="Catálogo de brincolines" class="btn_red">Ver más</a><p><br />
  <p class="compartir">
  <?php echo $abrecoment ;?> <div class="fb-like" data-href="http://www.inflamigos.com.mx/brincolines/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><?php echo $cierracoment ;?>
  </p>
</figure>



<figure class="miniserv">
  <a href="<?php echo $Myurl; ?>servicios/toldos/" title="Renta de toldos">
  <img src="<?php echo $Myurl; ?>imagenes/servicios/inflamigos_toldo_6x6.jpg" alt="Toldos" />
  </a>
  <a href="<?php echo $Myurl; ?>servicios/toldos/" title="Renta de toldos">
   <h4>Renta de Toldos</h4>
 </a>
  <figcaption>Contamos con toldos de diferentes medidas: 3 x 6, 6 x 6 y 6 x 12.</figcaption>
  <p><a href="<?php echo $Myurl; ?>servicios/toldos/" title="Toldos" class="btn_red">Ver más</a><p><br />
  <p class="compartir">
  <?php echo $abrecoment ;?> <div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/toldos/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><?php echo $cierracoment ;?>
  </p>
</figure>

<figure class="miniserv">
  <a href="<?php echo $Myurl; ?>servicios/futbolitos/" title="Renta de Futbolitos">
  <img src="<?php echo $Myurl; ?>imagenes/servicios/inflamigos_futbolito_clasico.jpg" alt="Futbolito" />
  </a>
  <a href="<?php echo $Myurl; ?>servicios/futbolitos/" title="Renta de Futbolitos">
   <h4>Renta de Futbolitos</h4>
 </a>
  <figcaption>Contamos con mesas de futbolito para los más grandes de la casa.</figcaption>
  <p><a href="<?php echo $Myurl; ?>servicios/futbolitos/" title="Futbolitos" class="btn_red">Ver más</a><p><br />
  <p class="compartir">
  <?php echo $abrecoment ;?> <div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/futbolitos/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><?php echo $cierracoment ;?>
  </p>
</figure>

<figure class="miniserv">
<a href="<?php echo $Myurl; ?>servicios/sillas-y-mesas/" title="Sillas y Mesas">
  <img src="<?php echo $Myurl; ?>imagenes/servicios/inflamigos_silla_adulto_plegable.jpg" alt="" />
  </a>
  <a href="<?php echo $Myurl; ?>servicios/sillas-y-mesas/" title="Sillas y Mesas">
   <h4>Alquiler de sillas y mesas</h4>
 </a>
  <figcaption>Manejamos paquetes de un tablón con 10 sillas, para niños y adultos.</figcaption>
   <p><a href="<?php echo $Myurl; ?>servicios/sillas-y-mesas/" title="Sillas y Mesas" class="btn_red">Ver más</a><p><br />
  <p class="compartir">
  <?php echo $abrecoment ;?> <div class="fb-like" data-href="http://www.inflamigos.com.mx/servicios/sillas-y-mesas/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><?php echo $cierracoment ;?>
  </p>
</figure>

</article>
</section>

		<!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
		<?php include('inc/footer.php');?>