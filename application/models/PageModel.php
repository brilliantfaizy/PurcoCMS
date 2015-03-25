<?php

class PageModel extends CI_Model{
    
     function PageModel()
     {
        parent::__construct();
     }
     function getallpage()
     {
       
        $query=$this->db->get($table);
        return $query->result();
     }
      
     public function getPage()  
    {  
      $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_pages');
      $this->db->order_by('Page');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }

    //print_r($return);
        return $return;
    }
     public function getPerm()  
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
     function getall2()
     {
        $this->load->database();
        $query = $this->db->get('tbl_permission_pages');
        return $query->result();
    }
     function getall1()
     {
        $this->load->database();
        $query = $this->db->get('tbl_pages');
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
         $this->db->from('tbl_pages');
         $this->db->where('Page_Id', $data);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }
 
    function update($id,$data)
    {
        $this->load->database();
        $this->db->where('Page_Id', $id);
        $this->db->update('tbl_pages', $data);
    }
 
    function insert($table,$data)
    {
        $this->db->insert($table,$data);
        //return $this->db->insert_id();
    }
 
    function delete($id)
    {
        $this->db->where('Page_Id', $id);
        $this->db->delete('tbl_pages');
    }
      function deletepage($id)
    {
        $this->db->where('PermPageId', $id);
        $this->db->delete('tbl_permission_pages');
    }
 
    function allrecord()
     {
        $this->load->database();
        /*$sql="SELECT tbl_user.*, tbl_role.*, tbl_profile.*, tbl_department.Dep_title FROM (tbl_role INNER JOIN tbl_user 
                ON tbl_role.RId= tbl_user.RId) INNER JOIN tbl_profile ON(tbl_user.UId= tbl_profile.UId) INNER 
                JOIN tbl_department ON(tbl_user.DId= tbl_department.DId) WHERE tbl_user.Status='1' ";*/
                  $sql="SELECT tbl_permission_pages.PermPageId, tbl_pages.Page, tbl_roles.* FROM 
                  (tbl_pages INNER JOIN tbl_permission_pages  ON tbl_pages.Page_Id= tbl_permission_pages.Page_Id)
                  INNER JOIN tbl_roles ON(tbl_permission_pages.RId= tbl_roles.RId) ";
                  $query=$this->db->query($sql);
                  return $query->result();
     }
     
     
   
    
//fill your cities dropdown depending on the selected city
    public function getCitiesByCountry($id_country=string)
    {
        $this->load->database();
        $sql="SELECT tbl_permission_pages.*, tbl_pages.Page, tbl_roles.* FROM 
                 (tbl_pages INNER JOIN tbl_permission_pages  ON tbl_pages.Page_Id= tbl_permission_pages.Page_Id)
                  INNER JOIN tbl_roles ON(tbl_permission_pages.RId= tbl_roles.RId) where tbl_roles.RId= $id_country order by tbl_pages.MenuPosition ASC ";
                
                $query=$this->db->query($sql);
       
         
        return $query;
    }
    
    public function SubMenus($id)
    {
        $this->load->database();
        $sql="SELECT * FROM `tbl_sub_menus` WHERE `Page_Id` = $id";
        $query=$this->db->query($sql);
        return $query;
    }
     function viewupdatepage($data)
    {    
         $this->load->database();
         $this->db->select('*');
         $this->db->from('tbl_permission_pages');
         $this->db->where('PermPageId', $data);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }
 
    function updatepage($id,$data)
    {
        $this->load->database();
        $this->db->where('PermPageId', $id);
        $this->db->update('tbl_permission_pages', $data);
    }
   
    }
    ?>
    