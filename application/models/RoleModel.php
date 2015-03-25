<?php

class RoleModel extends CI_Model{
    
     function RoleModel()
     {
        parent::__construct();
     }
     function getall2()
     {
       
        $query=$this->db->get($table);
        return $query->result();
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
	  public function getpage(){
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
     function getall1()
     {
        $this->load->database();
        $query = $this->db->get('tbl_roles');
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
         $this->db->from('tbl_roles');
         $this->db->where('RId', $data);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }
 //////////////////////////////////////////
    function updaterole($id,$data)
    {
        $this->load->database();
        $this->db->where('Action_Id', $id);
        $this->db->update('tbl_action_perm', $data);
    }
    
    function viewupdaterole($data)
    {    
         $this->load->database();
         $this->db->select('*');
         $this->db->from('tbl_action_perm');
         $this->db->where('sub_page_Id', $data);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
    }
 
    function update($id,$data)
    {
        $this->load->database();
        $this->db->where('RId', $id);
        $this->db->update('tbl_roles', $data);
    }
 
    function insert($table,$data)
    {
        $this->db->insert($table,$data);
        //return $this->db->insert_id();
    }
 
    function delete($id)
    {
        $this->db->where('RId', $id);
        $this->db->delete('tbl_roles');
    }
 function insertperm($table,$data)
    {
        $this->db->insert($table,$data);
      
    }
 function allview()
 	{
		$this->load->database();
			$sql="SELECT tbl_action_perm.*, tbl_roles.*,tbl_pages.*,tbl_sub_menus.* FROM tbl_action_perm join tbl_roles 
			ON tbl_action_perm.RId = tbl_roles.RId join tbl_pages ON 
			tbl_action_perm.Page_Id = tbl_pages.Page_Id  join tbl_sub_menus ON tbl_action_perm.sub_page_Id=tbl_sub_menus.Menu_Id";
				 $query=$this->db->query($sql);
                return $query->result();
 	}
 
 function allviewrole($id)
 	{
		$this->load->database();
			$sql="SELECT tbl_action_perm.*, tbl_roles.*,tbl_pages.*,tbl_sub_menus.* FROM tbl_action_perm Inner join tbl_roles 
			ON tbl_action_perm.RId = tbl_roles.RId Inner join tbl_pages ON 
			tbl_action_perm.Page_Id = tbl_pages.Page_Id Inner join tbl_sub_menus ON 
            tbl_action_perm.sub_page_Id=tbl_sub_menus.Menu_Id where tbl_action_perm.sub_page_Id=".$id."";
				 $query=$this->db->query($sql);
                return $query->result();
 	}
   
   function viewtablewith_page($id=string)
   {
    	$this->load->database();
			$sql="SELECT tbl_action_perm.*, tbl_roles.*,tbl_pages.*,tbl_sub_menus.* FROM tbl_action_perm join tbl_roles 
			ON tbl_action_perm.RId = tbl_roles.RId join tbl_pages ON 
			tbl_action_perm.Page_Id = tbl_pages.Page_Id  join tbl_sub_menus ON 
            tbl_action_perm.sub_page_Id=tbl_sub_menus.Menu_Id where tbl_action_perm.Page_Id=$id";
				 $query=$this->db->query($sql);
              return $query;
   }
    
   
    }
    ?>
    