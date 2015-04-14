<?php

class AutomobileModel extends CI_Model{
    
     function AutomobileModel()
     {
        parent::__construct();
     }
     function Insertmake($data)
     {
        $this->load->database();
        $this->db->insert('tbl_automobile_make', $data);
        
     }
     
     
}
?>