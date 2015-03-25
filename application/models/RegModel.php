<?php

class RegModel extends CI_Model{
    
     function RegModel()
     {
        parent::__construct();
     }
     
     
     
    public function getRole()  
    {  
      $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_roles');
      $this->db->order_by('RoleTitle');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }

    //print_r($return);
        return $return;
    }

 
     function getall()
     {
       
        $query=$this->db->get($table);
        return $query->result();
     }
      
     function allrecord()
     {
        $this->load->database();
      
                 $sql="SELECT tbl_user.*, tbl_roles.* FROM (tbl_roles INNER JOIN tbl_user 
                ON tbl_roles.RId= tbl_user.RId)  ";
                $query=$this->db->query($sql);
                return $query->result();
     }
     
     
     function getall1()
     {
        
        $this->load->database();
        $sql="select * from tbl_user where Status='1'";
        $query=$this->db->query($sql);
        return $query->result();
    }
    function get($table,$where=array(),$single=0)
    {
        $q=$this->db->get_where($table,$where);
        $result=$q->result_array();
        if($single)return $e[0];
        return $result;
    }
    function viewupdate($data)
    {    
         
         $this->load->database();
         //$data=$this->db->where('UId');
        $sql="SELECT tbl_user.*, tbl_roles.* FROM (tbl_roles INNER JOIN tbl_user 
                ON tbl_roles.RId= tbl_user.RId)   where tbl_user.UId=".$data."";
                $query1=$this->db->query($sql);
                return $query1->result();

 
    }

 function viewdelete($data)
    {    
         $this->load->database();
         $this->db->select('*');
         $this->db->from('tbl_user');
         $this->db->where('UId', $data);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    } 
    
    function insert($table)
    {
        $this->db->query($table);
      
    }
	
  
   
    
   
    }
    ?>
    