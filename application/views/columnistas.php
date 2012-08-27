<?php 

$db2=$this->load->database("columnas",true);

        ?>

<div>
<h2><a class="negro16" href="#">COLUMNISTAS</a></h2>
<div id="tabs" >
    <ul>
    <li><a href="#tabs-1">Fabián Gómez</a></li>
    <li><a href="#tabs-2">Carlos Macías</a></li>
</ul>

  <div id="tabs-1" class="item-columna" >
      <?php $query_=$db2->query('SELECT *
FROM
columnas ,
columnistas
WHERE
columnas.id_columnista = columnistas.id_columnista AND
columnistas.id_columnista = 1
ORDER BY
columnas.id_columna DESC
LIMIT 5');?>
      
      <?php foreach($query_->result() as $fabian) { ?>
			  <li><a href="#"><?php echo $fabian->titulo; ?> </a></li>
              <?php } ?>

  </div>
    
      <div id="tabs-2" class="item-columna" >
      <?php $query_=$db2->query('SELECT *
FROM
columnas ,
columnistas
WHERE
columnas.id_columnista = columnistas.id_columnista AND
columnistas.id_columnista = 22
ORDER BY
columnas.id_columna DESC
LIMIT 5');?>  
           <?php foreach($query_->result() as $carlos) { ?>
			  <li><a href="#"><?php echo $carlos->titulo; ?> </a></li>
              <?php } ?>
  
  </div>

  </div> <!--/content -->
  </div>
