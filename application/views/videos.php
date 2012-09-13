<?php 

$db3=$this->load->database("videos",true);

$query = $db3->query("SELECT videosYT.*
FROM
videosYT
where fecha<='".date("Y-m-d")."'
ORDER BY prioridad DESC, fecha desc, hora DESC, id desc
LIMIT 4");
$query= $query->result_array();
              ?>


<div class="columnhome bgazul youtube" style="width:640px;" >
  <div class="preview">
 <?php echo $query[0]['descripcion_mediana'];?>
<a href='<?php echo base_url();?>index.php/videos_controller/videos/<?php echo $query[0]['id'];?>'><?php echo $query[0]['titulo'];?></a>
   </div>
    
<table>
<tr>
<td><?php echo $query[1]['descripcion_peque'];?></td>
<td><strong class="negro13">
<a href="<?php echo base_url();?>index.php/videos_controller/videos/<?php echo $query[1]['id'];?>" ><?php echo $query[1]['titulo'] ;?></a>
    </strong><br/><?php echo $query[1]['descripcion_video'];?>
</td>
</tr>
</table>
    
    
   <div class="item-youtube">
   	<p></p>
	<span class="negro11"></span>
   </div>
<table>
<tr>
<td><?php echo $query[2]['descripcion_peque'];?></td>
<td><strong class="negro13">
        <a href="<?php echo base_url();?>index.php/videos_controller/videos/<?php echo $query[2]['id'];?>" ><?php echo $query[2]['titulo'] ;?></a>
    </strong><br/><?php echo $query[2]['descripcion_video'];?>
</td>
</tr>
</table>
  <div class="item-youtube">
   	<p></p>
	<span class="negro11"></span>
   </div>  
<table>
<tr>
<td><?php echo $query[3]['descripcion_peque'];?></td>
<td><strong class="negro13"><a href="<?php echo base_url();?>index.php/videos_controller/videos/<?php echo $query[3]['id'];?>" ><?php echo $query[3]['titulo'] ;?></a>
    </strong><br/><?php echo $query[3]['descripcion_video'];?>
</td>
</tr>
</table>
   <div class="item-youtube">
   	<p></p>
	<span class="negro11"></span>
   </div>   
  
</div> <!--/columnhome -->