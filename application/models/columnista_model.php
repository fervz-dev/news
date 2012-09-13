<?php

class Columnista_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function columnista($id_columna){
        $conec=$this->load->database("columnas",true);
        $query = $conec->query("
            SELECT 
            columnas.*, 
            columnistas.*, 
            imagen_columnas.id, 
            imagen_columnas.nombre, 
            imagen_columnas.titulo as img_tit, 
            imagen_columnas.descripcion as img_desc
            
            FROM 
            columnas , columnistas, imagen_columnas
            WHERE
            columnas.id_columna = ".$id_columna." AND
            columnas.idImagen = imagen_columnas.nombre
            LIMIT 1
                    ");
        
        return ($query->num_rows() > 0)? $query->result_array() : NULL;
    }
    
    public function mas_columnista($id_columna){
        $conec=$this->load->database("columnas",true);
        $query = $conec->query("
           SELECT
columnas.id_columna,
columnas.titulo,
columnas.fecha,

opinionColumna.id_columna, COUNT(opinionColumna.id_columna) as coment,
opinionColumna.id_mensaje

FROM
columnas,
opinionColumna

WHERE
columnas.id_columna = opinionColumna.id_columna AND
columnas.id_columna != ".$id_columna." AND
opinionColumna.activo = 1
GROUP BY
columnas.id_columna DESC
ORDER BY
columnas.id_columna DESC
LIMIT 3
   
                    ");
        
        return ($query->num_rows() > 0)? $query->result_array() : NULL;
    }
    
    
      
     public function inserta($data){
        $conec=$this->load->database("columnas",true);
        
        
        $comentarios= $conec->query("
            INSERT INTO 
            `wwwcont_columnas`.`opinionColumnas` (

                `id_mensaje` ,

                `nombre` ,

                `email` ,

                `ciudad` ,

                `tituloM` ,

                `comentarios` ,

                `fecha` ,

                `hora` ,

                `id_noticia` ,

                `datos_publicos` ,

                `activo`

                )

VALUES (

'', '".$data['nombre']."', '".$data['email']."', '', '', '".$data['comentario']."', '".date("Y-m-d")."', '".date("H:i:s")."','".$data['id']."', 0,1);
   
"); 
        //var_dump($comentarios);
        return $this->db->affected_rows();
        
    }
    
        public function comentarios($id_columna){
        $c = $this->load->database("columnas", true);
        $cometario =$c->query("
            SELECT
columnas.*,
opinionColumna.nombre as opinion_de,
opinionColumna.comentarios as comentario_de,
opinionColumna.activo


FROM

columnas ,
opinionColumna

WHERE

columnas.id_columna = ".$id_columna." AND
opinionColumna.id_columna = columnas.id_columna AND
opinionColumna.activo = 1

ORDER BY id_columna DESC
");
        return ($cometario->num_rows() > 0) ? $cometario->result_array() : NULL;
        
    }
    
}
?>
