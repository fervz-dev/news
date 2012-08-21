<?php

class Rubro_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function ciudad(){
        
        $query = $this->db->query("
            SELECT 
            noticias.*, rubros.*
            FROM 
            noticias , rubros 
            WHERE 
            noticias.idTipoDocto = rubros.idRubro AND rubros.idRubro= 2 AND rubros.activo = 1 
            ORDER BY 
            noticias.idNoticia DESC 
            LIMIT 5");
    
        return ($query->num_rows() > 0)? $query->result_array() : NULL;        
    }
    
    public function nacionales(){
        
        $query = $this->db->query("
            SELECT 
            noticias.*, rubros.*
            FROM 
            noticias , rubros 
            WHERE 
            noticias.idTipoDocto = rubros.idRubro AND rubros.idRubro= 7 AND rubros.activo = 1 
            ORDER BY 
            noticias.idNoticia DESC 
            LIMIT 5");
    
        return ($query->num_rows() > 0)? $query->result_array() : NULL;        
    }
    
    public function espectaculos(){
        
        $query = $this->db->query("
            SELECT 
            noticias.*, rubros.*
            FROM noticias , rubros
            WHERE noticias.idTipoDocto = rubros.idRubro AND rubros.idRubro= 11 AND rubros.activo = 1
            ORDER BY 
            noticias.idNoticia DESC 
            LIMIT 5");
    
        return ($query->num_rows() > 0)? $query->result_array() : NULL;        
    }
    
}
?>
