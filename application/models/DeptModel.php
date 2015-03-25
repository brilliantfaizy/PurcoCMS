<?php

class DeptModel extends CI_Model{
    
     function DeptModel()
     {
        parent::__construct();
     }
     function getall()
     {
       
        $query=$this->db->get($table);
        return $query->result();
     }
      
     
     function getall1()
     {
        $this->load->database();
        $query = $this->db->get('tbl_department');
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
         $this->db->select('*');
         $this->db->from('tbl_department');
         $this->db->where('DId', $data);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }
 
    function update($id,$data)
    {
        $this->load->database();
        $this->db->where('DId', $id);
        $this->db->update('tbl_department', $data);
    }
 
    function insert($table,$data)
    {
        $this->db->insert($table,$data);
        //return $this->db->insert_id();
    }
 
    function delete($id)
    {
        $this->db->where('DId', $id);
        $this->db->delete('tbl_department');
    }
 
   
    
   
    }
    ?>
    