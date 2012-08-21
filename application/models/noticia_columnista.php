<?php

class Noticoa_Columnista extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_noticia($id_columnista){
        
        $query = $this->db->query("
            SELECT 
            columnas.*, columnistas.*
            FROM 
            columnas , columnistas
            WHERE
            columnas.id_columnista = columnistas.id_columnista AND columnistas.id_columnista =".$id_columnista.
                "ORDER BY
                    columnas.id_columna DESC 
                    LIMIT 5
                    ");
        
        return ($query->num_rows() > 0)? $query->result_array() : NULL;
    }
            
    
}
?>
