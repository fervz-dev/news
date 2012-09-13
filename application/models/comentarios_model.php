<?php

class Comentarios_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    public function inserta($data){
        $conec=$this->load->database("noticias",true);
        
        
        $comentarios= $conec->query("
            INSERT INTO 
            `wwwcont_noticias`.`opinionnoticia` (

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
    //para recuperar el id del ultimo guardado $insert_id = $this->db->insert_id(); 
    
}
?>
