<?php

class AddotionalInfoModel extends CI_Model{
    
     function AddotionalInfoModel()
     {
        parent::__construct();
     }
     
      function AddAdditionalInfo($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_involved_party_additional_info', $data);
        
     }
     
     function getAdditionalInfo()
     {
         $this->load->database();
        $sql="Select * from tbl_involved_party_additional_info";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editAdditionalInfo($id)
     {
        $this->load->database();
        $sql="select * from tbl_involved_party_additional_info where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateAdditionalInfo($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_involved_party_additional_info',$data);
     }
     function deleteAdditionalInfo($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_involved_party_additional_info');
     }
}
?>