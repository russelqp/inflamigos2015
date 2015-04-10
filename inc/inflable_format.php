<section id="section-rounded">
  <article id="item">

<?php echo "<h3>".$titulo. "</h3>";?>

<br />
<!--Inicia lista-imagenes-->
<div class="lista-imagenes">
<?php
   $ruta="inflables/thumbs/".$brincolin."/";
   $ruta2="inflables/g/".$brincolin."/brincolin_inflable_";
   $images = glob($ruta . "*");
   echo "<h4>Imagenes:</h4><ul>" ; 
 
	  foreach($images as $image)
	 { 
	 	  
	 	
	 	$ext = ".jpg";/*pathinfo( $ruta2, PATHINFO_EXTENSION );*/
	 	$name = pathinfo( $image, PATHINFO_FILENAME );
	    $name = explode("thumb_",$name);
	  
	    echo '<li><a href="'.$Myurl.$ruta2.$name[0].$name[1].$ext.'" data-target="flare" data-flare-gallery="gallery1" data-flare-thumb="'.$Myurl.''.$image.'" title="'.$titulo.'"><img src="'.$Myurl.''.$image.'" alt="'.$brincolin."_thumb".'" /></a></li>';
		
	}
	if ($id_video !="")
		{ 
			
			


			echo '<li><a data-target="flare" data-flare-gallery="gallery1" data-flare-thumb="images/video.png" href="http://www.youtube.com/watch?v='.$id_video.'" title="Video de '.$titulo.'" ><img src="'.$Myurl.'images/video.png" alt ="video_'.$brincolin.'" /></a></li>';
			//echo '<li><a href="http://www.youtube.com/embed/'.$id_video.'" rel="LightFrame" title="Video de '.$titulo.'"><img src="images/video.png" alt ="video_'.$brincolin.'" /></a></li>' ;
		  
 		}

		//echo('<div class="uvideo"><iframe class="youtube-player" type="text/html" width="100%" height="50%" src="http://www.youtube.com/embed/'.$id_video.'" frameborder="0"></iframe></div>');}

	echo "</ul>";
?>
<div id ="detalle-brincolin">

<?php
echo "<p>";
echo "Características: <br />".$detalles;
if ($acuatico==true)
	{
		echo ' <span>¡Máxima Diversión Acuática!</span>';
	}
echo "</p>";

?>
</div>
</div>

			
	 
<div class="datos">
<?php
echo "<p>";
echo '<g:plusone href="http://www.inflamigos.com.mx/brincolines/'.$inflable.'/"></g:plusone>';
echo '<div class="fb-like" data-href="http://www.inflamigos.com.mx/brincolines/'.$inflable.'/" data-layout="button_count" data-show-faces="true" data-send="true"></div>';
echo "<br />";
echo 'Precio por día: <span class="precio">$'.$precio.'.00</span>';
echo "<br />";
echo "Ancho: ".$ancho." m";
echo "<br />";
echo "Largo: ". $largo." m";
echo "<br />";
echo "Alto: ".$alto." m";
echo "<br />";
echo "Capacidad: ".$capacidad." niños";
echo "<br />";
echo "Edad recomendada: ".$edades." años";
echo "<br />";
echo "</p>";
?>

<a href="#openModal"><button class="btn_reservar" type="button">Reservar</button></a><!--<button class="btn_reservar" type="button">Condiciones</button>-->
</div>

<?php include("modal-.html");?>

<div class="fb-comments" data-href="http://www.inflamigos.com.mx/brincolines/<?php echo $inflable.'/';?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
<br />
<!--Inicia menu_inflables_mini-->

<div class="menu_inflables_mini">
<h4>Ver otro inflable</h4>
    <ul>
    <li><?php echo '<a href='.$Myurl.'brincolines/castillo-del-chavo/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/cchavo_thumb.png" alt="castillo_del_chavo" title="Castillo del Chavo"/></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/castillo-aventura/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/caventura_thumb.png" alt="castillo_aventura_middle" title="Castillo Aventura"/></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/castillo-princess/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/cprincess_thumb.png" alt="castillo_princess_middle" title="Castillo Princess"/></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/escaladrilo/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/escaladrilo_thumb.png" alt="escaladrilo-middle" title="Escaladrilo" /></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/angry-box/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/angry_box.jpg"  alt="angry-box-middle" title="Angry Box" /></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/minions-box/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/minions_box_thumb.jpg"  alt="minions-box-middle" title="Minions Box" /></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/escaladora/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/escaladora_thumb.png" alt="escaladora_middle" title="Escaladora"/></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/dora-box/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/dora_box_thumb.jpg" alt="dora-box_middle" title="Dora Box"/></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/resbaladilla-bob-esponja/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/bobesponja_thumb.png" alt="bob-esponja-middle" title="Bob Esponja Resbaladilla" /></a></li>
  	<li><?php echo '<a href='.$Myurl.'brincolines/arco-slide/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/aslide_thumb.png" alt="arco_slide_middle" title="Arco Slide"/></a></li>
	<li><?php echo '<a href='.$Myurl.'brincolines/ultra-cubo/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/ucubo_thumb.png" alt="ultra_cubo_middle" title="Ultra Cubo"/></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/space-lab/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/spacelab_thumb.png" alt="space-lab-middle" title="Space Lab" /></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/aqualand/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/aqualand_thumb.png" alt="aqualand-middle" title="Aqualand" /></a></li>
    <li><?php echo '<a href='.$Myurl.'brincolines/splash-pool/>'; ?><img src="<?php echo $dir_brincolines; ?>inflables/thumbs/splashpool_thumb.png" alt="splash-pool-middle" title="Splash Pool" /></a></li>
    </ul>
  </div><!--End menu_inflables_mini-->
</article>

 
<article>
<div class="lista">
					<h4>Reglas b&aacute;sicas para el uso de los brincolines inflables:</h4>
					<img src="<?php echo $dir_brincolines; ?>imagenes/punching-bag.png" title="alegria" class="img-list" />
					<ol>
						<li>No subir con juguetes u objetos punzo cortantes.</li>
						<li>Prohibido introducir confeti o cerpentina al inflable</li>
						<li>No subir con alimentos, dulces y/o bebidas.</li>
						<li>No subir con zapatos, tenis u otro calzado de material r&iacute;gido o que pueda   da&ntilde;ar el equipo.</li>
						<li>No arrastrar el brincolin para transladarlo a otro lugar.</li>
					</ol>
</div>
</article>
</section>