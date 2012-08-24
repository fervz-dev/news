<?php 

$db3=$this->load->database("videos",true);

$query = $db3->query("SELECT *
FROM
videosyt
where fecha<='".date("Y-m-d")."'
ORDER BY prioridad DESC, fecha desc, hora DESC, id desc
LIMIT 4");
$query= $query->result_array();
              ?>


<div class="columnhome bgazul youtube" style="width:640px;">
  <div class="preview">
 <?php echo $query[0]['descripcion_mediana'];?>
<?php echo $query[0]['titulo'] ;?>
   </div>
   <div class="item-youtube"><?php echo $query[1]['descripcion_peque'];?>
   	<p><strong class="negro13"><a href="#"><?php echo $query[1]['titulo'] ;?></a></strong></p>
	<span class="negro11"> <?php echo $query[1]['descripcion_video'];?></span>
   </div>
    
   <div class="item-youtube"><img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" />
   	<p><strong class="negro13"> <a href="#"><?php echo $query[2]['titulo'] ;?></a></strong></p>
	<span class="negro11"> <?php echo $query[2]['descripcion_video']?></span>
   </div>
    
   <div class="item-youtube"> <img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" />
   	<p><strong class="negro13"><a href="#"><?php echo $query[3]['titulo'] ;?></a></strong></p>
	<span class="negro11"> <?php echo $query[3]['descripcion_video'];?></span>
   </div>
</div> <!--/columnhome -->