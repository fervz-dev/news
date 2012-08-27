
<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>
<?php $this->load->helper('text');?>

<?php 
/**************************PALABRAS RECORTADAS DE NACIONALES****************************************************/
$nacional1 = $nacional[1]['sintesis']; 
$nacional1= word_limiter($nacional1, 12);

$nacional2 = $nacional[2]['sintesis']; 
$nacional2= word_limiter($nacional2, 12);

$nacional3 = $nacional[3]['sintesis']; 
$nacional3= word_limiter($nacional3, 12);

$nacional4 = $nacional[4]['sintesis']; 
$nacional4= word_limiter($nacional4, 12);


/**************************PALABRAS RECORTADAS DE LOCALES(CIUDAD)*************************************************/
$ciudad1 = $ciudad[1]['sintesis']; 
$ciudad1= word_limiter($ciudad1, 12);

$ciudad2 = $ciudad[2]['sintesis']; 
$ciudad2= word_limiter($ciudad2, 12);

$ciudad3 = $ciudad[3]['sintesis']; 
$ciudad3= word_limiter($nacional3, 12);

$ciudad4 = $ciudad[4]['sintesis']; 
$ciudad4= word_limiter($ciudad4, 12);
 ?>

<div id="main">

<div class="columnhome">
<h2><a class="negro16" href="#">NACIONALES</a></h2>
<div class="content border">
<div class="imacrop">
<img src="ima/locales/home.png" width="326" height="183" />
</div>
 
    
    <h3 class="titulosfoto" ><span><a class="blanco18"  href="#"><?php echo $nacional[0]['titulo'];?></a></span></h3>
<h2 class="bg-item"><a class="negro18" href="#"><?php echo $nacional[1]['titulo'];?></a><br />

    
    <span><?php echo $nacional1;?></span></h2>

<h2 class="bg-item"><a class="negro18" href="#"><?php echo $nacional[2]['titulo'];?></a><br/>
<span><?php echo $nacional2;?></span></h2>
    
<h2 class="bg-item"><a class="negro18" href="#"><?php echo $nacional[3]['titulo'];?></a><br/>
<span><?php echo $nacional3;?></span></h2>
    
<h2 class="bg-item"><a class="negro18" href="#"><?php echo $nacional[4]['titulo'];?></a><br/>
<span><?php echo $nacional4;?></span></h2>
</div> <!--/content -->
</div> <!--/columnhome -->

<div class="columnhome">
<h2><a class="negro16" href="#">LOCALES</a></h2>
<div class="content border">
  <div class="imacrop" style="height:217px;"> <img src="ima/internacionales/foto.jpg" alt="" width="326" height="217" />
  </div>
  <h3 class="titulosfoto"><span><a  class="blanco18" href="#"><?php echo $ciudad[0]['titulo'];?></a></span></h3><br/>
  <h2 class="bg-item"><a class="negro18" href="#"><?php echo $ciudad[1]['titulo'];?></a><br/>
  <span><?php echo $ciudad1;?></span></h2>
  
  
  <h2 class="bg-item"><a class="negro18" href="#"><?php echo $ciudad[2]['titulo'];?></a><br/>
  <span><?php echo $ciudad2;?></span></h2>
  
  <h2 class="bg-item"><a class="negro18" href="#"><?php echo $ciudad[3]['titulo'];?></a><br/>
  <span><?php echo $ciudad3;?></span></h2>
</div>
</div> <!--/columnhome -->

<div class="columnhome" style="margin-right:0px; width:296px;">
  <!-- Espectaculos -->
<h2><a class="negro16" href="#">ESPECTACULOS</a></h2>
<div class="content border">
<div id="container">
<div id="slides">
        <div class="slides_container">
          <div class="slide">
            <a href="http://www.flickr.com/photos/jliba/4665625073/" title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank"><img src="ima/slide-galeria/slide-1.jpg"  alt="Slide 1"></a>
            <div class="caption" style="bottom:0">
              <p><?php echo $espectaculos[0]['titulo'];?></p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/stephangeyer/3020487807/" title="Taxi | Flickr - Photo Sharing!" target="_blank"><img src="ima/slide-galeria/slide-2.jpg"  alt="Slide 2"></a>
            <div class="caption">
              <p><?php echo $espectaculos[1]['titulo'];?></p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/childofwar/2984345060/" title="Happy Bokeh raining Day | Flickr - Photo Sharing!" target="_blank"><img src="ima/slide-galeria/slide-3.jpg"  alt="Slide 3"></a>
            <div class="caption">
              <p><?php echo $espectaculos[2]['titulo'];?></p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/b-tal/117037943/" title="We Eat Light | Flickr - Photo Sharing!" target="_blank"><img src="ima/slide-galeria/slide-4.jpg"  alt="Slide 4"></a>
            <div class="caption">
              <p><?php echo $espectaculos[3]['titulo'];?></p>
            </div>
          </div>
          <div class="slide">
            <a href="http://www.flickr.com/photos/bu7amd/3447416780/" title="&ldquo;I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.&rdquo; | Flickr - Photo Sharing!" target="_blank"><img src="ima/slide-galeria/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
            <div class="caption">
              <p><?php echo $espectaculos[4]['titulo'];?></p>
            </div>
          </div>
        </div>
        <a href="#" class="prev"><img src="ima/layout/anteriorchico.png"  alt="Arrow Prev"></a>
        <a href="#" class="next"><img src="ima/layout/siguientechico.png"  alt="Arrow Next"></a>
      </div>
      <!-- <img src="ima/slide-galeria/example-frame.png" width="739" height="341" alt="Example Frame" id="frame"> -->
    </div>
  </div>

<!-- /Espectaculos -->

<?php echo $this->load->view('columnistas');?>


</div> <!--/columnhome -->

<span class="clear" style="margin:20px 0;"></span>

<div class="columnhome">
  <img src="ima/banners/chicos/banner2.jpg" width="329" height="95" />
</div><!--/columnhome -->

<div class="columnhome">
  <img src="ima/banners/chicos/banner2.jpg" width="329" height="95" />
</div><!--/columnhome -->

<div class="columnhome" style="width:296px; margin-right:0px;">
  <img src="ima/banners/chicos/banner1.png" width="312" height="116" />
</div> <!--/columnhome -->

<span class="clear"></span>
<!-----------------------------------------------VIDEOS------------------------------------>

<?php echo $this->load->view('videos');?>
  
<!---------------------------------------TERMINA VIDEOS------------------------------------->

<?php 

$db4=$this->load->database("noticias",true);
$query = $db4->query("
    SELECT
noticias.idNoticia,
noticias.fecha,
noticias.hora,
noticias.titulo,
noticias.idImagen,
noticias.idTipoDocto,
noticias.contenido,
noticias.sintesis,
noticias.idPrioridadInterna,
noticias.alineacion,
noticias.titular,
noticias.id_usuario,
noticias.id_tipoUsuario,
noticias.keywords,
noticias.description,

opinionnoticia.id_mensaje,
opinionnoticia.id_noticia, COUNT(opinionnoticia.id_noticia),
opinionnoticia.activo,
opinionnoticia.comentarios,

rubros.idRubro,
rubros.etiqueta
FROM
noticias
LEFT JOIN opinionnoticia ON noticias.idNoticia = opinionnoticia.id_noticia
JOIN rubros ON noticias.idTipoDocto = rubros.idRubro
WHERE
rubros.etiqueta NOT LIKE 'Ciudad' AND
noticias.idTipoDocto = rubros.idRubro AND
rubros.etiqueta NOT LIKE 'Nacional' AND
rubros.etiqueta NOT LIKE 'Espectáculos' AND
rubros.activo = 1 

GROUP BY
noticias.idNoticia DESC
ORDER BY
noticias.idNoticia DESC
LIMIT 8");


$query= $query->result_array();




        ?>
    <div class="columnhome" style="width:296px; margin-right:0px;">
  <h2 class="titulo"><span>Otras noticias</span></h2>
    <ul class="item-columna">
    <li><strong class="negro12"><a href="#"><?php echo $query[0]['titulo']; ?> </a></strong><br />
      <strong class="azul12"><?php echo $query[0]['fecha'];?></strong> · <strong><?php echo $query[0]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span>
     <a class="azul11" href="#"><?php echo $query[0]['etiqueta'];?></a> <span class="azul11">/</span> 
                    <a class="azul11"><?php $id= $query[0]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> 
                    <span class="azul11">/</span> <a class="azul11"><?php echo $bus[2]['titulo'];?></a></li>

    <li><strong class="negro12"><a href="#"><?php echo $query[1]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $query[1]['fecha']; ?></strong> · <strong><?php echo $query[1]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> 
            <a class="azul11" href="#"><?php echo $query[1]['etiqueta'];?></a> <span class="azul11">/</span> 
            <a class="azul11" href="#"><?php $id= $query[1]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>
    
    <li><strong class="negro12"><a href="#"><?php echo $query[2]['titulo']?></a></strong><br />
      <strong class="azul12"><?php echo $query[2]['fecha'];?></strong> · <strong><?php echo $query[2]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $query[2]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $query[2]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>

  </ul>
    <p><img src="ima/banners/chicos/banner2.jpg" alt="" width="296" height="88" /></p>
</div><!--/columnhome -->

<span class="clear" style="margin:20px 0"></span>

<div class="columnhome" width="326" height="545">
  <?php echo $this->load->view('twitter');?>
</div><!--/columnhome -->

<div class="columnhome">
  <h2 class="titulo"><span>Otras noticias</span></h2>
    <ul class="item-columna">
    <li><strong class="negro12"><a href="#"><?php echo $query[3]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $query[3]['fecha'];?></strong> · <strong><?php echo $query[3]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $query[3]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $query[3]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> 
     <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>
    
    <li><strong class="negro12"><a href="#"><?php echo $query[4]['titulo']?></a></strong><br />
      <strong class="azul12"><?php echo $query[4]['fecha']?></strong> · <strong><?php echo $query[4]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $query[4]['etiqueta'];?></a> <span class="azul11">/</span>
     <a class="azul11" href="#"><?php $id= $query[4]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>
    
    <li><strong class="negro12"><a href="#"><?php echo $query[5]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $query[5]['fecha'];?></strong> · <strong><?php echo $query[5]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $query[5]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $query[5]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>
  </ul>

    <p><img src="ima/banners/chicos/banner2.jpg" width="329" height="95" /></p>
<h2 class="titulo"><span>Otras noticias</span></h2>
    <ul class="item-columna">
    <li><strong class="negro12"><a href="#"><? echo $query[6]['titulo'];?></a></strong><br />
      <strong class="azul12"><? echo $query[6]['fecha'];?></strong> · <strong><?php echo $query[6]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $query[6]['etiqueta'];?></a> <span class="azul11">/</span>
     <a class="azul11" href="#"><?php $id= $query[6]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> <span class="azul11">  /  </span>  <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>

    <li><strong class="negro12"><a href="#"><?echo $query[7]['titulo'];?></a></strong><br />
      <strong class="azul12"><?echo $query[7]['fecha'];?></strong> · <strong><?php echo $query[7]['COUNT(opinionnoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $query[7]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $query[7]['idRubro']; 
                    $bus = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $bus=$bus->result_array();
                    
                    echo $bus[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $bus[2]['titulo'];?></a></li>
  </ul>

</div> <!--/columnhome -->

<div class="columnhome" style="width:296px; margin:0px;" width="296" height="435"">
	<?php $this->load->view('facebook');?>
    <p><img src="ima/banners/chicos/banner2.jpg" width="296" height="95" /></p>

</div>
<!--/columnhome -->
<span class="clear"></span>
</div> <!--/main -->

<?php $this->load->view('footer'); ?>