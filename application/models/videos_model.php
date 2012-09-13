<?php

class Videos_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function video($id){
        $con=$this->load->database("videos",true);

$video = $con->query("SELECT
    videosYT.*
FROM
videosYT
    where 
       videosYT.id =".$id."
       ");

 return ($video->num_rows() > 0) ? $video->result_array() : NULL;

    }
    
    public function videodos($id){
        $con=$this->load->database("videos",true);
$video = $con->query("SELECT
    videosYT.*
FROM
videosYT

    where 
       videosYT.id <".$id."
        ORDER BY prioridad DESC, 
            fecha desc, 
            hora DESC,
            id desc 
            LIMIT 4");

 return ($video->num_rows() > 0) ? $video->result_array() : NULL;

    }
    
    
    
}
?>
