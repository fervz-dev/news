<?php 
$this->load->view('header');
$this->load->view('menu');
?>
<?php 
 

?>
<div id="main">

<div id="content" style="width:650px; float:left;">
<h1><a class="rubro_interna" href="#"><?php echo $ciudad[0]['etiqueta'];?></a></h1>

<div class="titulo_interna">
  <h2 ><?php echo $ciudad[0]['titulo'];?></h2>


</div>
  <div class="redes_interna">

    <a href="" class="fbk">FACEBOOK</a>
    <a href=""class="twt">TWITTER</a>
  </div>

<div class="content border listado-noticia">
<div class="imacrop">
<img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $ciudad[0]['idImagen'];?>" width="426" height="330" />
</div>

<p><?php echo $ciudad[0]['sintesis'];?>.</p>
<p><?php echo $ciudad[0]['contenido'];?>.</p>

</div> <!--/content -->


<!-- <div class="paginador">
  <ul class="pager">
    	<li class="pag-actual">1</li>
		<li class="pag-item"><a href="#" title="Ir a la página 2" class="active">2</a></li>
		<li class="pag-item"><a href="#" title="Ir a la página 3" class="active">3</a></li>
		<li class="pag-item"><a href="#" title="Ir a la página 4" class="active">4</a></li>
		<li class="pag-item"><a href="#" title="Ir a la página 5" class="active">5</a></li>
		<li class="pag-siguiente"><a href="#" title="Ir a la página siguiente" class="active">►</a></li>
 		<li class="ver-todas"><a href="#" title="Ir a la página siguiente" class="active">Ver todos</a></li>
	</ul>
</div> -->


</div>

<div class="sidebar" style="margin-right:0px; width:296px; float:right;">

<div class="columnhome" style="width:296px; margin-right:0px;">

  <h2 class="titulo"><span><?php echo $ciudad[0]['etiqueta'];?></span></h2>
  
    <ul class="item-columna">
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudaddos[0]['idNoticia']?>"><?php echo $ciudaddos[0]['titulo'];?></a></strong><br />
      <strong class="azul12">fecha</strong> · <strong>  Comentarios</strong><br />
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudaddos[0]['idNoticia']?>"><?php echo $ciudaddos[1]['titulo'];?></a></strong><br />
      <strong class="azul12">fecha</strong> · <strong>2  Comentarios</strong><br />
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/internas/ciudad/<?php echo $ciudaddos[0]['idNoticia']?>"><?php echo $ciudaddos[2]['titulo'];?></a></strong><br />
      <strong class="azul12">fecha</strong> · <strong>2  Comentarios</strong><br />

  </ul>
</div><!--/columnhome -->

<div class="columnhome" style="width:296px; margin:0px;">
	<?php $this->load->view('facebook');?>
    <p><?php $this->load->view('abajo_derecha');?></p>

</div> <!--/columnhome -->

</div> <!--/sidebar -->


<span class="clear" style="margin:20px 0;"></span>

<span class="clear"></span>
</div> <!--/main -->
<?php $this->load->view('footer');?>
