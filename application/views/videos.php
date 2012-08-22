<?php 

$db3=$this->load->database("videos",true);

$query = $db3->query("SELECT *
FROM
videosyt
where fecha<='".date("Y-m-d")."'
ORDER BY prioridad DESC, fecha desc, hora DESC, id desc
LIMIT 4");


   ?>


<div>
<div class="columnhome bgazul youtube" style="width:640px;">
  <div class="preview">
   <?php foreach ($query as $key) {?>  
  <img src="ima/youtube/previrew.jpg" width="333" height="264" />
   <?php echo $key[0]['titulo'];?>
			
   Become a Member of the Club Today!
   Join us at www.commonwealthclub.today
   </div>
   <div class="item-youtube"> <a href="#"><img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" /></a>
   	<p><strong class="negro13">Mujer extraviada culpa a su GPS</strong></p>
	<span class="negro11"> Este jueves, cuando volvió a subir el precio del</span>
   </div>
   <div class="item-youtube"> <a href="#"><img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" /></a>
   	<p><strong class="negro13">Mujer extraviada culpa a su GPS</strong></p>
	<span class="negro11"> Este jueves, cuando volvió a subir el precio del</span>
   </div>
   <div class="item-youtube"> <a href="#"><img src="ima/youtube/fot1.jpg" width="109" height="76" align="left" /></a>
   	<p><strong class="negro13">Mujer extraviada culpa a su GPS</strong></p>
	<span class="negro11"> Este jueves, cuando volvió a subir el precio del</span>
        
        <?php }?>
   </div>
</div> <!--/columnhome -->
</div>