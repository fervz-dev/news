<?php 
$this->load->view('header');
$this->load->view('menu');
?>
<script type="text/javascript">
<!--
function showMe (it, box) {
var vis = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = vis;
}

-->
</script>

<script type='text/javascript'>
//<![CDATA[
var tgs = new Array( 'div','td','tr');
var szs = new Array( 'xx-small','x-small','small','medium','large','x-large','xx-large' );
var startSz = 2;
function ts( trgt,inc ) {
if (!document.getElementById) return
var d = document,cEl = null,sz = startSz,i,j,cTags;
sz += inc;
if ( sz < 0 ) sz = 0;
if ( sz > 6 ) sz = 6;
startSz = sz;
if (!( cEl = d.getElementById( trgt ) ) ) cEl = d.getElementsByTagName( trgt )[ 0 ];
cEl.style.fontSize = szs[ sz ];
for ( i = 0 ; i < tgs.length ; i++ ) {
cTags = cEl.getElementsByTagName( tgs[ i ] );
for ( j = 0 ; j < cTags.length ; j++ ) cTags[ j ].style.fontSize = szs[ sz ];
}
}
//]]>
</script>
<div id="main">

<div id="content" style="width:630px; float:left; background-color:#fff; padding:10px; border:1px solid #C7C7C7">
<h2><a class="azul16 nobold" href="#"><?php echo $columnista[0]['columna'];?></a></h1>

<h1><a class="negro20"><?php echo $columnista[0]['titulo'];?></a></h2>

  <div class="columna" style="width:295px;">

   
<img src="http://www.contraparteinformativa.com/archivoFotografico/<?php echo $columnista[0]['idImagen'];?>" width="295" height="196"  />
<div class="piefoto">
    <strong class="blanco11"><?php echo $columnista[0]['img_tit'];?></strong> 
    <?php echo $columnista[0]['img_desc'];?>
</div>

<div class="tool">
	<a href="javascript:ts('body',1)"><img src="<?php echo base_url();?>ima/layout/increase.png" alt="incrementar tamaño de la fuente" width="24" height="24" /></a>
	<a href="javascript:ts('body',-1)"><img src="<?php echo base_url();?>ima/layout/decrease.png" alt="reducir tamaño de la fuente" width="24" height="24" /></a>
	<a href="#"><img src="<?php echo base_url();?>ima/layout/print.png" alt="imprimir" width="25" height="24" /></a>
	<a href="http://www.facebook.com/contraparteinf.periodismo"><img src="<?php echo base_url();?>ima/layout/fb-int.png" alt="facebook" width="21" height="21" /></a>
	<a href="http://twitter.com/fabiangomezh"><img src="<?php echo base_url();?>ima/layout/tw-int.png" alt="twitter" width="21" height="21" /></a>
</div> 

    <span class="clear"></span>
    <div  class="listado-noticia">&nbsp;

    </div>
<span class="clear"></span>

  </div> <!--/content -->
  
  
<div  class="listado-noticia">&nbsp;

<?php echo $columnista[0]['contenido'];?>
   </div>
  
  <span class="clear"></span>

  <div class="comentarios" style="background-color:#f3faff; padding:10px; border:1px solid #C7C7C7">
<h3>
    <a href="" onclick="showMe('div1', this)"> <img style="vertical-align:middle; margin-right:10px;" src="<?php echo base_url();?>ima/layout/comment.png" width="48" height="48" /></a>
<form>
Agrega tu comentario  <input type="checkbox" name="c1" onclick="showMe('div1', this)">
</form>

<div id="div1" style="display:none">
   <?php 
   
   $this->load->helper('form'); 
   $id=$columnista[0]['id_columna'];
   //$attributes = array('class' => 'comentarios', 'id' => '$var');
   echo form_open('columnista_controller/insertar');
   
   ?> 
    
<table border=0 id="t1" aling="center" whit="100%">
<tr>
	<td>Nombre</td>
	<td>
	<INPUT type=text name="nombre">
        </td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
	<td>E-mail</td>
	<td>
	<INPUT type=text name="email">
        </td>
</tr>
<tr>
    <td>Comentario</td>
	<td>
	<textarea cols="45" rows="5" name="comentario"></textarea>
        </td>
</tr>



<tr>
	<td COLSPAN=2>
	<INPUT type="submit" value="Enviar" aling="abdmiddle">
        <input type="hidden" name="id_columna" value="<?php echo $id;?>">
	</td>
</tr>



</table>
    </form>
</div>

<span class="clear" style="margin:20px 0;"></span>
 <div align="justify" class="">
     Por pol&iacute;tica de Contraparte Informativa S.A. de C.V. los comentarios redactados con lenguaje no adecuado y de car&aacute;cter ofensivo e irrespetuoso que involucren cuestiones de vida privada, lesionen la dignidad de las personas o se escuden en el anonimato para da&ntilde;ar honras o reputaciones, ser&aacute;n editados o eliminados.
 </div>

<span class="clear" style="margin:20px 0;"></span>

<div class="titulo_interna">
  <h2 >Comentarios</h2>
<?php 
if($comentario[0]['opinion_de']!=NULL){
         foreach ($comentario as $comentarios) {
        echo $comentarios['opinion_de']; echo':';echo ' '; echo $comentarios['comentario_de'];
                  echo '<br/>'; echo '<br/>';

     }
     
     }  else {
         echo 'No hay comentarios';
}
     
     ;?>

</div><!--/lista de comentarios-->

</div><!--/comentarios-->
</div>

<div class="sidebar" style="margin-right:0px; width:296px; float:right;">

<div class="columnhome" style="width:296px; margin-right:0px;">

  <h2 class="titulo"><span><?php echo $columnista[0]['columna'];?></span></h2>
  
    <ul class="item-columna">
   
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/columnista_controller/columnista/<?php echo $columnista_mas[0]['titulo'];?>/<?php echo $columnista_mas[0]['id_columna']?>"><?php echo $columnista_mas[0]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $columnista_mas[0]['fecha'];?></strong> · <strong><?php echo $columnista_mas[0]['coment'];?>  Comentarios</strong><br />
   
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/columnista_controller/columnista/<?php echo $columnista_mas[1]['titulo'];?>/<?php echo $columnista_mas[1]['id_columna']?>"><?php echo $columnista_mas[1]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $columnista_mas[1]['fecha'];?></strong> · <strong><?php echo $columnista_mas[1]['coment'];?>  Comentarios</strong><br />
    
    <li><strong class="negro12"><a href="<?php echo base_url();?>index.php/columnista_controller/columnista/<?php echo $columnista_mas[2]['titulo'];?>/<?php echo $columnista_mas[2]['id_columna']?>"><?php echo $columnista_mas[2]['titulo'];?></a></strong><br />
      <strong class="azul12"><?php echo $columnista_mas[2]['fecha'];?></strong> · <strong><?php echo $columnista_mas[2]['coment'];?>  Comentarios</strong><br />

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
