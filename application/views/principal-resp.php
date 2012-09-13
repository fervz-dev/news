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
<div class="coin-title">
<img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $nacional[0]['idImagen'];?>" width="326" height="183" />
</div>
    <h3 class="titulosfoto" >
        <span>
            <a class="blanco18"  href="<?php echo base_url();?>index.php/internas/nacional/<?php echo $nacional[0]['titulo'];?>/<?php echo $nacional[0]['idNoticia']?>"><?php echo $nacional[0]['titulo'];?></a>
        </span>
    </h3>

    <h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/nacional/<?php echo $nacional[1]['titulo'];?>/<?php echo $nacional[1]['idNoticia'];?>"><?php echo $nacional[1]['titulo'];?></a><br />
    <span><?php echo $nacional1;?></span></h2>

    <h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/nacional/<?php echo $nacional[2]['titulo'];?>/<?php echo $nacional[2]['idNoticia'];?>"><?php echo $nacional[2]['titulo'];?></a><br/>
<span><?php echo $nacional2;?></span></h2>
    
<h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/nacional/<?php echo $nacional[3]['titulo'];?>/<?php echo $nacional[3]['idNoticia'];?>"><?php echo $nacional[3]['titulo'];?></a><br/>
<span><?php echo $nacional3;?></span></h2>
    
<h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/nacional/<?php echo $nacional[4]['titulo'];?>/<?php echo $nacional[4]['idNoticia'];?>"><?php echo $nacional[4]['titulo'];?></a><br/>
<span><?php echo $nacional4;?></span></h2>
</div> <!--/content -->


</div> <!--/columnhome -->

<div class="columnhome">
<h2><a class="negro16" href="#">LOCALES</a></h2>
<div class="content border">
  <div class="coin-title" style="height:215px;"> <img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $ciudad[0]['idImagen'];?>" alt="" width="326" height="217" />
  </div>
     <h3 class="titulosfoto">
        <span>
            <a class="blanco18"  href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudad[0]['titulo'];?>/<?php echo $ciudad[0]['idNoticia']?>">
                <?php echo $ciudad[0]['titulo'];?>
            </a>
        </span>
    </h3>
  
    <h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudad[1]['titulo'];?>/<?php echo $ciudad[1]['idNoticia'];?>"><?php echo $ciudad[1]['titulo'];?></a><br/>
  <span><?php echo $ciudad1;?></span></h2>
  
  
  <h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudad[2]['titulo'];?>/<?php echo $ciudad[2]['idNoticia'];?>"><?php echo $ciudad[2]['titulo'];?></a><br/>
  <span><?php echo $ciudad2;?></span></h2>
  
  <h2 class="bg-item"><a class="negro18" href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudad[3]['titulo'];?>/<?php echo $ciudad[3]['idNoticia'];?>"><?php echo $ciudad[3]['titulo'];?></a><br/>
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
              <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[0]['titulo'];?>/<?php echo $espectaculos[0]['idNoticia'];?>" title="" target="_blank"><img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $espectaculos[0]['idImagen'];?>"  width="570" height="270" alt="Slide 1"></a>
            <div class="caption" style="bottom:0">
              <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[0]['titulo'];?>/<?php echo $espectaculos[0]['idNoticia'];?>"target="_blank"><p><?php echo $espectaculos[0]['titulo'];?></p></a>
            </div>
          </div>
          <div class="slide">
              <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[1]['titulo'];?>/<?php echo $espectaculos[1]['idNoticia'];?>" title="" target="_blank"><img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $espectaculos[1]['idImagen'];?>"  width="300" height="240" alt="Slide 2"></a>
            <div class="caption">
              <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[1]['titulo'];?>/<?php echo $espectaculos[1]['idNoticia'];?>" target="_blank"><p><?php echo $espectaculos[1]['titulo'];?></p></a>
            </div>
          </div>
          <div class="slide">
            <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[2]['titulo'];?>/<?php echo $espectaculos[2]['idNoticia'];?>" title="" target="_blank"><img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $espectaculos[2]['idImagen'];?>"  width="300" height="240" alt="Slide 3"></a>
            <div class="caption">
              <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[2]['titulo'];?>/<?php echo $espectaculos[2]['idNoticia'];?>" target="_blank"><p><?php echo $espectaculos[2]['titulo'];?></p></a>
            </div>
          </div>
          <div class="slide">
            <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[3]['titulo'];?>/<?php echo $espectaculos[3]['idNoticia'];?>" title="" target="_blank"><img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $espectaculos[3]['idImagen'];?>" width="300" height="240" alt="Slide 3"></a>
              <div class="caption">
                <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[3]['titulo'];?>/<?php echo $espectaculos[3]['idNoticia'];?>" target="_blank"><p><?php echo $espectaculos[3]['titulo'];?></p></a>
            </div>
          </div>
          <div class="slide">
            <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[4]['titulo'];?>/<?php echo $espectaculos[4]['idNoticia'];?>" title="" target="_blank"><img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $espectaculos[4]['idImagen'];?>" width="300" height="240" alt="Slide 5"></a>
            <div class="caption">
              <a href="<?php echo base_url();?>index.php/internas/espectaculo/<?php echo $espectaculos[4]['titulo'];?>/<?php echo $espectaculos[4]['idNoticia'];?>" target="_blank"><p><?php echo $espectaculos[4]['titulo'];?></p></a>
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

<!----------------------------------BANNERS CENTRALES---------------------------------------------------------------------------->
<?php $this->load->view('banner_central');?>
<!----------------------------------/BANNERS CENTRALES---------------------------------------------------------------------------->


<span class="clear"></span>
<!-----------------------------------------------VIDEOS------------------------------------>

<?php echo $this->load->view('videos');?>
  
<!---------------------------------------TERMINA VIDEOS------------------------------------->

<?php 

$db4=$this->load->database("noticias",true);
$qvideo = $db4->query("
    SELECT
noticias.*,

opinionNoticia.id_mensaje,
opinionNoticia.id_noticia, COUNT(opinionNoticia.id_noticia),
opinionNoticia.activo,
opinionNoticia.comentarios,

rubros.idRubro,
rubros.etiqueta

FROM
noticias
LEFT JOIN opinionNoticia ON noticias.idNoticia = opinionNoticia.id_noticia
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
LIMIT 9
");


$qvideo= $qvideo->result_array();

        ?>
    <div class="columnhome" style="width:296px; margin-right:0px;">
  <h2 class="titulo"><span>Otras noticias</span></h2>
    <ul class="item-columna">
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[0]['idNoticia']?>/<?php echo $qvideo[0]['idRubro']?>"><?php echo $qvideo[0]['titulo']; ?> </a></strong><br />
      <strong class="azul12"><?php echo $qvideo[0]['fecha'];?></strong> · <strong><?php echo $qvideo[0]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span>
     <a class="azul11" href="#"><?php echo $qvideo[0]['etiqueta'];?></a> <span class="azul11">/</span> 
                    <a class="azul11"><?php $id= $qvideo[0]['idRubro']; 
                    $busv = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $busv=$busv->result_array();
                    
                    echo $busv[1]['titulo'];
                    ?></a> 
                    <span class="azul11">/</span> <a class="azul11"><?php echo $busv[2]['titulo'];?></a></li>

    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[1]['idNoticia']?>/<?php echo $qvideo[1]['idRubro']?>"><?php echo $qvideo[1]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[1]['fecha']; ?></strong> · <strong><?php echo $qvideo[1]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> 
            <a class="azul11" href="#"><?php echo $qvideo[1]['etiqueta'];?></a> <span class="azul11">/</span> 
            <a class="azul11" href="#"><?php $id= $qvideo[1]['idRubro']; 
                    $busv = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $busv=$busv->result_array();
                    
                    echo $busv[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $busv[2]['titulo'];?></a></li>
    
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[2]['idNoticia']?>/<?php echo $qvideo[2]['idRubro']?>"><?php echo $qvideo[2]['titulo']?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[2]['fecha'];?></strong> · <strong><?php echo $qvideo[2]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $qvideo[2]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $qvideo[2]['idRubro']; 
                    $busv = $db4->query("SELECT
               noticias.idNoticia,
               noticias.titulo,
               noticias.idTipoDocto
               FROM
               noticias
               WHERE
               noticias.idTipoDocto =" .$id."
               ORDER BY
               noticias.idNoticia DESC");
                    $busv=$busv->result_array();
                    
                    echo $busv[1]['titulo'];
                    ?></a> <span class="azul11">/</span> <a class="azul11" href="#"><?php echo $busv[2]['titulo'];?></a></li>

  </ul>
  <!----------------------------------BANNERS DERECHA VIDEOS---------------------------------------------------------------------------->

    <p><?php $this->load->view('derecha_videos');?></p>
<!----------------------------------BANNERS DERECHA VIDEOS---------------------------------------------------------------------------->

</div><!--/columnhome -->

<span class="clear" style="margin:20px 0"></span>

<div class="columnhome" width="326" height="545">
  <?php echo $this->load->view('twitter');?>
</div><!--/columnhome -->

<div class="columnhome">
  <h2 class="titulo"><span>Otras noticias</span></h2>
    <ul class="item-columna">
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[3]['idNoticia']?>/<?php echo $qvideo[3]['idRubro']?>"><?php echo $qvideo[3]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[3]['fecha'];?></strong> · <strong><?php echo $qvideo[3]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $qvideo[3]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $qvideo[3]['idRubro']; 
                   
     $db5=$this->load->database("noticias",true);
     $bus = $db5->query("SELECT
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
    
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[4]['idNoticia']?>/<?php echo $qvideo[4]['idRubro']?>"><?php echo $qvideo[4]['titulo']?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[4]['fecha']?></strong> · <strong><?php echo $qvideo[4]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $qvideo[4]['etiqueta'];?></a> <span class="azul11">/</span>
     <a class="azul11" href="#"><?php $id= $qvideo[4]['idRubro']; 
                    $bus = $db5->query("SELECT
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
    
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[5]['idNoticia']?>/<?php echo $qvideo[5]['idRubro']?>"><?php echo $qvideo[5]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[5]['fecha'];?></strong> · <strong><?php echo $qvideo[5]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $qvideo[5]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $qvideo[5]['idRubro']; 
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
<!------------------------------------------BANNER ABAJO CENTRO----------------------------------------------------------------------->
    <p><?php $this->load->view('abajo_centro');?></p>
    
<!------------------------------------------/BANNER ABAJO CENTRO----------------------------------------------------------------------->
    
<h2 class="titulo"><span>Otras noticias</span></h2>
    <ul class="item-columna">
     <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[6]['idNoticia']?>/<?php echo $qvideo[6]['idRubro']?>"><?php echo $qvideo[6]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[6]['fecha'];?></strong> · <strong><?php echo $qvideo[6]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $qvideo[6]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $qvideo[6]['idRubro'];
     $db6=$this->load->database("noticias",true);
                    $bus = $db6->query("SELECT
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
     
     
     
     <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/otras/<?php echo $qvideo[7]['idNoticia']?>/<?php echo $qvideo[7]['idRubro']?>"><?php echo $qvideo[7]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $qvideo[7]['fecha'];?></strong> · <strong><?php echo $qvideo[7]['COUNT(opinionNoticia.id_noticia)'];?>  Comentarios</strong><br />
     <span class="negro11">Temas relacionados:</span> <a class="azul11" href="#"><?php echo $qvideo[7]['etiqueta'];?></a> <span class="azul11">/</span> 
     <a class="azul11" href="#"><?php $id= $qvideo[7]['idRubro']; 
                    $bus = $db6->query("SELECT
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
    
 <!-------------------------------------BANNER ABAJO DERECHA------------------------------------------------------>
   
 <p><?php $this->load->view('abajo_derecha');?></p>

 <!-------------------------------------/BANNER ABAJO DERECHA------------------------------------------------------>

</div>
<!--/columnhome -->
<span class="clear"></span>
</div> <!--/main -->

<?php $this->load->view('footer'); ?>