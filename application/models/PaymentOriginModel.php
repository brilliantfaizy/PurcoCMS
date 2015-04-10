<?php

class PaymentOriginModel extends CI_Model{
    
     function PaymentOriginModel()
     {
        parent::__construct();
     }
     
      function Addpaymentorigin($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_payment_origin', $data);
        
     }
     
     function getpaymentorigin()
     {
         $this->load->database();
        $sql="Select * from tbl_payment_origin";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editpaymentorigin($id)
     {
        $this->load->database();
        $sql="select * from tbl_payment_origin where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updatepaymentorigin($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_payment_origin',$data);
     }
     function deletepaymentorigin($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_payment_origin');
     }
}
?>