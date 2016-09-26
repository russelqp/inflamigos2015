<section id="section-rounded">
  <article id="item">

<?php echo "<h3>".$titulo. "</h3>";?>

<br />
<!--Inicia lista-imagenes-->
<div class="lista-imagenes">
<?php
   $ruta=$Myroot."inflables/thumbs/".$brincolin."/";
   $ruta2=$Myroot."inflables/g/".$brincolin."/brincolin_inflable_";
   $images = glob($ruta . "*");
   echo "<h4>Imagenes:</h4><ul>" ;

	  foreach($images as $image)
	 {
	  	$ext = ".jpg";/*pathinfo( $ruta2, PATHINFO_EXTENSION );*/
	 	$name = pathinfo( $image, PATHINFO_FILENAME );
	    $name = explode("thumb_",$name);

	    echo '<li><a href="'.$Myurl.$ruta2.$name[0].$name[1].$ext.'" data-target="flare" data-flare-gallery="gallery1" data-flare-thumb="'.$Myurl.''.$image.'" title="'.$titulo.'"><img src="'.$Myurl.$image.'" alt="'.$brincolin."_thumb".'" /></a></li>';
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

<!--<a href="#openModal"><button class="btn_reservar" type="button">Reservar</button></a><button class="btn_reservar" type="button">Condiciones</button>-->
</div>

<!--<?php include("modal-.html");?>-->

<div class="fb-comments" data-href="http://www.inflamigos.com.mx/brincolines/<?php echo $inflable.'/';?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
<br />
<!--Inicia menu_inflables_mini-->

<div class="menu_inflables_mini">
<h4>Ver otro inflable</h4>
    <ul>
    <li><?php echo '<a href='.$Myurl.'brincolines/carrera-loca/><img src="'.$Myurl2.'inflables/thumbs/carrera_loca_thumb.png" alt="carrera_loca_thumb" title="Carrera Loca"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/castillo-avengers/><img src="'.$Myurl2.'inflables/thumbs/cavengers_thumb.png" alt="cavengers_thumb" title="Castillo Avengers"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/crayolin/><img src="'.$Myurl2.'inflables/thumbs/crayolin_thumb.png" alt="crayolin_thumb" title="Crayolin"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/princess-party/><img src="'.$Myurl2.'inflables/thumbs/princessp_thumb.png" alt="princess_party_thumb" title="Princess Party"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/castillo-frozen/><img src="'.$Myurl2.'inflables/thumbs/cfrozen_thumb.png" alt="castillo_frozen" title="Castillo Frozen"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/escaladora-funny/><img src="'.$Myurl2.'inflables/thumbs/escaladoraf_thumb.png" alt="escaladora_funny_thumb" title="Escaladora Funny"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/galeon-aventura/><img src="'.$Myurl2.'inflables/thumbs/gaventura_thumb.png" alt="Galeon_aventura_thumb" title="Galeón Aventura"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/mickey-kids/><img src="'.$Myurl2.'inflables/thumbs/mickeykids_thumb.png" alt="Mickey_Kids_thumb" title="Mickey Kids"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/peppa-pig/><img src="'.$Myurl2.'inflables/thumbs/peppapig_thumb.png" alt="peppa_pig_thumb" title="Peppa Pig"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/castillo-del-chavo/><img src="'.$Myurl2.'inflables/thumbs/cchavo_thumb.png" alt="castillo_del_chavo_thumb" title="Castillo del Chavo"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/escaladrilo/><img src="'.$Myurl2.'inflables/thumbs/escaladrilo_thumb.png" alt="escaladrilo-thumb" title="Escaladrilo" /></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/angry-box/><img src="'.$Myurl2.'inflables/thumbs/angrybox_thumb.png"  alt="angry-box-thumb" title="Angry Box" /></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/minions-box/><img src="'.$Myurl2.'inflables/thumbs/minionsbox_thumb.png"  alt="minions-box-thumb" title="Minions Box" /></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/escaladora/><img src="'.$Myurl2.'inflables/thumbs/escaladora_thumb.png" alt="escaladora_thumb" title="Escaladora"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/dora-box/><img src="'.$Myurl2.'inflables/thumbs/dorabox_thumb.png" alt="dora-box_thumb" title="Dora Box"/></a></li>'; ?>

  	<li><?php echo '<a href='.$Myurl.'brincolines/arco-slide/><img src="'.$Myurl2.'inflables/thumbs/aslide_thumb.png" alt="arco_slide_thumb" title="Arco Slide"/></a></li>'; ?>

	 <li><?php echo '<a href='.$Myurl.'brincolines/ultra-cubo/><img src="'.$Myurl2.'inflables/thumbs/ucubo_thumb.png" alt="ultra_cubo_thumb" title="Ultra Cubo"/></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/space-lab/><img src="'.$Myurl2.'inflables/thumbs/spacelab_thumb.png" alt="space-lab-thumb" title="Space Lab" /></a></li>'; ?>

    <li><?php echo '<a href='.$Myurl.'brincolines/splash-pool/><img src="'.$Myurl2.'inflables/thumbs/splashpool_thumb.png" alt="splash-pool-thumb" title="Splash Pool" /></a></li>'; ?>

     <li><?php echo '<a href='.$Myurl.'brincolines/galeon-jolly-roger/><img src="'.$Myurl2.'inflables/thumbs/gjollyroger_thumb.png" alt="gjollyroger-thumb" title="Galeón Jolly Roger" /></a></li>'; ?>

    </ul>
  </div><!--End menu_inflables_mini-->
</article>

<article>
<div class="lista">
					<h4>Reglas básicas para el uso de los brincolines inflables:</h4>
					<img src="<?php echo $Myurl2; ?>imagenes/punching-bag.png" title="alegria" class="img-list" />
					<ol>
						<li>No subir con juguetes u objetos punzo cortantes.</li>
						<li>Prohibido introducir confeti o cerpentina al inflable.</li>
						<li>No subir con alimentos, dulces y/o bebidas.</li>
						<li>No subir con zapatos, tenis u otro calzado de material r&iacute;gido o que pueda   da&ntilde;ar el equipo.</li>
						<li>No arrastrar el brincolin para transladarlo a otro lugar.</li>
					</ol>
</div>
</article>
</section>