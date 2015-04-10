<?php

class InvolvedPartyModel extends CI_Model{
    
     function InvolvedPartyModel()
     {
        parent::__construct();
     }
     
      function AddInvolvedPartyType($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_involved_party_type', $data);
        
     }
     
     function getTypeOfPartyAll()
     {
         $this->load->database();
        $sql="Select * from tbl_involved_party_type";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editpartytype($id)
     {
        $this->load->database();
        $sql="select * from tbl_involved_party_type where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updatepartytype($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_involved_party_type',$data);
     }
     function deletepartytype($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_involved_party_type');
     }
}
?>