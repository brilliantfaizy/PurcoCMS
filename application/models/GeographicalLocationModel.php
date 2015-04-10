<?php

class GeographicalLocationModel extends CI_Model{
    
     function GeographicalLocationModel()
     {
        parent::__construct();
     }
     
      function Addlocation($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_geograpical_location', $data);
        
     }
     
     function getlocation()
     {
         $this->load->database();
        $sql="Select * from tbl_geograpical_location";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editlocation($id)
     {
        $this->load->database();
        $sql="select * from tbl_geograpical_location where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updatelocation($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_geograpical_location',$data);
     }
     function deletelocation($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_geograpical_location');
     }
}
?>