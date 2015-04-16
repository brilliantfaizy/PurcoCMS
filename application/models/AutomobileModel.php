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
     function InsertModel($data)
     {
        $this->load->database();
        $this->db->insert('tbl_automobile_make_model', $data);
     }
      
    function getmakes()
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
       function DeleteModel($id)
       {
             $this->load->database();
             $sql="delete from tbl_automobile_make_model where Model_Id=".$id."";
             $query=$this->db->query($sql);
             return $query->result();
       }
       function DeleteMake($id)
       {
        
             $this->load->database();
             $sql="delete from tbl_automobile_make where Id=".$id."";
             $query=$this->db->query($sql);
             return $query->result();
        
       }
        function editmake($id)
        {
             $this->load->database();
             $sql="select * from tbl_automobile_make where Id=".$id."";
             $query=$this->db->query($sql);
             return $query->result();
        }
        function updatemake($id,$data)
        {
            $this->load->database();
            $this->db->where('Id',$id);
             $this->db->update('tbl_automobile_make',$data);
        }
}
?>