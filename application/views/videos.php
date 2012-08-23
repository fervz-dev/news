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

<div>
<div class="columnhome bgazul youtube" style="width:640px;">
  <div class="preview">
   

  <?php echo $query[0]['descripcion'];?>
<?php echo $query[0]['titulo'] ;?>
   
   </div>
   <div class="item-youtube"> <a href="#"><?php echo $query[0]['descripcion_peque'];?></a>
   	<p><strong class="negro13"><?php echo $query[1]['titulo'] ;?></strong></p>
	<span class="negro11"> </span>
   </div>
   <div class="item-youtube"> <a href="#"><img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" /></a>
   	<p><strong class="negro13"><?php echo $query[2]['titulo'] ;?></strong></p>
	<span class="negro11"> </span>
   </div>
   <div class="item-youtube"> <a href="#"><img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" /></a>
   	<p><strong class="negro13"><?php echo $query[3]['titulo'] ;?></strong></p>
	<span class="negro11"> </span>
        
        
   </div>
</div> <!--/columnhome -->
</div>