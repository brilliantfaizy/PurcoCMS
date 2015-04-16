<?php

class ClaimStatusModel extends CI_Model{
    
     function ClaimStatusModel()
     {
        parent::__construct();
     }
     
      function AddClaimStatus($data)
      {
        $this->load->database();   
        $this->db->insert('tbl_claim_status', $data);
      }
     function getClaimStatus()
     {
        $this->load->database();
        $sql="Select * from tbl_claim_status";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editClaimStatus($id)
     {
        $this->load->database();
        $sql="select * from tbl_claim_status where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateClaimStatus($id,$data)
     {
        $this->load->database();
        $this->db->where('Id',$id);
        $this->db->update('tbl_claim_status',$data);
     }
     function deleteClaimStatus($id)
     {
        $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_claim_status');
     }
}
?>