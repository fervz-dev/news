<?php

class Noticia extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function ciudad($idNoticia) {
        $conec = $this->load->database("noticias", true);
        $ciudad = $conec->query("
   SELECT
noticias.*,
rubros.*,

imagen.id,
imagen.nombre,
imagen.titulo as img_tit,
imagen.descripcion as img_desc

FROM

noticias ,
rubros ,
imagen

WHERE
noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia = " . $idNoticia . " AND
rubros.idRubro = 2 AND
noticias.idImagen = imagen.id 

ORDER BY idNoticia DESC
");

        return ($ciudad->num_rows() > 0) ? $ciudad->result_array() : NULL;
    }

    public function ciudaddos($idNoticia) {
        $conec = $this->load->database("noticias", true);
        $ciudad = $conec->query("
   SELECT
noticias.*,


opinionNoticia.id_noticia, COUNT(opinionNoticia.id_noticia) as coment,
opinionNoticia.activo,


rubros.idRubro,
rubros.etiqueta,

imagen.id,
imagen.nombre

FROM
noticias
LEFT JOIN opinionNoticia ON noticias.idNoticia = opinionNoticia.id_noticia
JOIN rubros ON noticias.idTipoDocto = rubros.idRubro
INNER JOIN imagen ON noticias.idImagen = imagen.id

WHERE

noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia != " . $idNoticia . " AND
rubros.idRubro = 2 AND
noticias.idImagen = imagen.id     AND
rubros.activo = 1 

GROUP BY
noticias.idNoticia DESC
ORDER BY
noticias.idNoticia DESC
LIMIT 4
");

        return ($ciudad->num_rows() > 0) ? $ciudad->result_array() : NULL;
    }

    public function comentarios($idNoticia){
        $c = $this->load->database("noticias", true);
        $cometario =$c->query("
            SELECT
noticias.*,
opinionNoticia.*


FROM

noticias ,
opinionNoticia

WHERE

noticias.idNoticia = ".$idNoticia." AND
opinionNoticia.id_noticia = noticias.idNoticia AND
opinionNoticia.activo = 1

ORDER BY idNoticia DESC
");
        return ($cometario->num_rows() > 0) ? $cometario->result_array() : NULL;
        
    }


    
    
    public function nacional($idNoticia) {
        $con = $this->load->database("noticias", true);
        $nacional = $con->query("
   SELECT
noticias.*,
rubros.*,

imagen.id,
imagen.nombre,
imagen.titulo as img_tit,
imagen.descripcion as img_desc

FROM

noticias ,
rubros ,
imagen

WHERE
noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia = " . $idNoticia . " AND
rubros.idRubro = 7 AND
noticias.idImagen = imagen.id 

ORDER BY idNoticia DESC
");

        return ($nacional->num_rows() > 0) ? $nacional->result_array() : NULL;
    }

    public function nacionaldos($idNoticia) {
        $con = $this->load->database("noticias", true);
        $nacional = $con->query("
   SELECT
noticias.*,


opinionNoticia.id_noticia, COUNT(opinionNoticia.id_noticia) as coment,
opinionNoticia.activo,
opinionNoticia.comentarios,

rubros.idRubro,
rubros.etiqueta,

imagen.id,
imagen.nombre

FROM
noticias
LEFT JOIN opinionNoticia ON noticias.idNoticia = opinionNoticia.id_noticia
JOIN rubros ON noticias.idTipoDocto = rubros.idRubro
INNER JOIN imagen ON noticias.idImagen = imagen.id

WHERE

noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia != " . $idNoticia . " AND
rubros.idRubro = 7 AND
noticias.idImagen = imagen.id     AND
rubros.activo = 1 

GROUP BY
noticias.idNoticia DESC
ORDER BY
noticias.idNoticia DESC
LIMIT 4
");
        return ($nacional->num_rows() > 0) ? $nacional->result_array() : NULL;
    }
    
    
    
    public function otras($idNoticia,$idRubro){
         $conc=$this->load->database("noticias",true);
$otras = $conc->query("
 SELECT
noticias.*,
rubros.*,

imagen.id,
imagen.nombre,
imagen.titulo as img_tit,
imagen.descripcion as img_desc

FROM

noticias ,
rubros ,
imagen

WHERE
noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia = ".$idNoticia." AND
rubros.idRubro = ".$idRubro." AND
noticias.idImagen = imagen.id
ORDER BY idNoticia DESC
LIMIT 1") ;

 return ($otras->num_rows() > 0) ? $otras->result_array() : NULL;
        
    }
    
    
    
    public function otrasdos($idNoticia,$idRubro){
        $c=$this->load->database("noticias",true);
           $otrasdos = $c->query("
   SELECT
noticias.*,


opinionNoticia.id_noticia, COUNT(opinionNoticia.id_noticia) as coment,
opinionNoticia.activo,

rubros.*



FROM
noticias
LEFT JOIN opinionNoticia ON noticias.idNoticia = opinionNoticia.id_noticia
JOIN rubros ON noticias.idTipoDocto = rubros.idRubro
INNER JOIN imagen ON noticias.idImagen = imagen.id

WHERE

noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia != " . $idNoticia . " AND
rubros.idRubro = ".$idRubro." AND
rubros.activo = 1 

GROUP BY
noticias.idNoticia DESC
ORDER BY
noticias.idNoticia DESC
LIMIT 4

");
    return ($otrasdos->num_rows() > 0) ? $otrasdos->result_array() : NULL;    
    }
    
    
    
    
    
    
    public function espectaculo($idNoticia) {
        $conec = $this->load->database("noticias", true);
        $espectaculo = $conec->query("
    SELECT
noticias.*,
rubros.*,

imagen.id,
imagen.nombre,
imagen.titulo as img_tit,
imagen.descripcion as img_desc

FROM

noticias ,
rubros ,
imagen

WHERE
noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia = ".$idNoticia." AND
rubros.idRubro = 11 AND
noticias.idImagen = imagen.id
ORDER BY idNoticia DESC
LIMIT 1");

        return ($espectaculo->num_rows() > 0) ? $espectaculo->result_array() : NULL;
    }
    
    
     public function espectaculodos($idNoticia) {
        $conec = $this->load->database("noticias", true);
        $espectaculo = $conec->query("
      SELECT
noticias.*,


opinionNoticia.id_noticia, COUNT(opinionNoticia.id_noticia) as coment,
opinionNoticia.activo,
opinionNoticia.comentarios,

rubros.idRubro,
rubros.etiqueta,

imagen.id,
imagen.nombre

FROM
noticias
LEFT JOIN opinionNoticia ON noticias.idNoticia = opinionNoticia.id_noticia
JOIN rubros ON noticias.idTipoDocto = rubros.idRubro
INNER JOIN imagen ON noticias.idImagen = imagen.id

WHERE

noticias.idTipoDocto = rubros.idRubro AND
noticias.idNoticia != ".$idNoticia." AND
rubros.idRubro = 11 AND
noticias.idImagen = imagen.id     AND
rubros.activo = 1 

GROUP BY
noticias.idNoticia DESC
ORDER BY
noticias.idNoticia DESC
LIMIT 4
");

        return ($espectaculo->num_rows() > 0) ? $espectaculo->result_array() : NULL;
    }
    
    
    
    
    
    
    
    
    
    
    

}

?>
