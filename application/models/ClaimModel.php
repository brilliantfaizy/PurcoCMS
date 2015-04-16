<?php

class ClaimModel extends CI_Model{
    
     function ClaimModel()
     {
        parent::__construct();
     }
     
     
     function getclient()
     {
      $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_client_details');
      $this->db->order_by('Client_name');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
      }
      
      function getemployee()
      {
      $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_employee_info');
      $this->db->order_by('LegalName');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
      }
      function getamount()
      {
      $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_amount_type');
      $this->db->order_by('Key');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
      }
       function getmake()
      {
      $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_automobile_make');
      $this->db->order_by('Make');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
      }
      
      function fillmodel($id)
      {
             $this->load->database();
             $sql="select * from tbl_automobile_make_model where Id=".$id."";
             $query=$this->db->query($sql);
             return $query->result();
      }
      function getclaim($id)
      {
            $this->load->database();
             $sql="select * from tbl_sub_client_details where Client_code='".$id."'";
             $query=$this->db->query($sql);
             return $query->result();
      }
}
?>