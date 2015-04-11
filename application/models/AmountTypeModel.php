<?php
class AmountTypeModel extends CI_Model{
    
     function AmountTypeModel()
     {
        parent::__construct();
     }
     
      function AddamountType($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_amount_type', $data);
        
     }
     function getamountType()
     {
         $this->load->database();
        $sql="Select * from tbl_amount_type";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editamountType($id)
     {
        $this->load->database();
        $sql="select * from tbl_amount_type where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateamountType($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_amount_type',$data);
     }
     function deleteamountType($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_amount_type');
     }
}
?>