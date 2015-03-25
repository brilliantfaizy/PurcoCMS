<?php


class mainModel extends CI_Model{
    
    function mainModel(){
        
        parent::__construct();
    }
    
    function general(){
          
        
    }
    
    function check_user(){
    
    $this->load->database();
    $query = $this->db->query("SELECT count('count') as User, RId, Status, Username, Password FROM tbl_user where `Username` = '".$this->input->post('Username')."' AND `Password` = '".$this->input->post('Password')."'");
    return $query->result();
    
    }
    
    function GetRoleTitle($id){
        
    $this->load->database();
    $query = $this->db->query("select RoleTitle from tbl_roles where RId = $id");
    return $query->result()[0]->RoleTitle;
       
      
    }
    
   
    
    function checkSession(){
        
        
        //load the session library
        $this->load->library('session');
        $this->load->helper('url');
        
        
        if (isset($this->session->userdata['Username']) == "") {
                
                //prompt users that there is no session
                echo "<script>alert('need to login')</script>";
                redirect('main/login');
                return false;
            
            
        } else {
            
            //get the session[user_input]
            $userinput = $this->session->userdata['Username'];
            $LoginData = array();
            $LoginData[0] = $userinput;
            $LoginData[1] = $this->session->userdata['Role'];
            return $LoginData;
             
        }
        
    }
  
  
  function GetProfile($Username){
    
     $this->load->database();
     $query = $this->db->query("select tbl_user.UId, tbl_user.Username, tbl_user.Password from tbl_user   where tbl_user.Username = '$Username'");
     return $query->result();
    
  }
  
  function GetMenus($Rid){
         
    $this->load->database();
    $query = $this->db->query("SELECT tbl_pages.*, tbl_permission_pages.* FROM (tbl_permission_pages INNER JOIN tbl_pages ON tbl_pages.Page_Id= tbl_permission_pages.Page_Id) where tbl_permission_pages.RId='".$Rid."' Order by tbl_pages.MenuPosition ASC");
    return $query->result();
    
  }
  
  function GetSubMenus($Page_Id,$roleID){
         
    $this->load->database();
    $query = $this->db->query(" SELECT tbl_action_perm.*,tbl_sub_menus.* FROM tbl_action_perm INNER JOIN tbl_sub_menus ON tbl_action_perm.sub_page_Id = tbl_sub_menus.Menu_Id where tbl_action_perm.Page_Id=$Page_Id and tbl_action_perm.RId=$roleID");
    
   
    //$query = $this->db->query("SELECT tbl_action_perm.*,tbl_sub_menus.* FROM tbl_action_perm INNER JOIN tbl_sub_menus ON tbl_action_perm.Page_Id=tbl_sub_menus.Page_Id where tbl_sub_menus.Page_Id=$Page_Id");
    return $query->result();
    
  }
  
  
  function UpdateProfile(){
    
    
        $this->load->database();
        $this->db->query("Update tbl_user set Username = '".$this->input->post('Username')."',Password = '".$this->input->post('Password')."' where UId = ".$this->input->post('UId')."");
        //$this->db->query("Update tbl_profile set First_name = '".$this->input->post('First_name')."',Last_name = '".$this->input->post('Last_name')."',Email = '".$this->input->post('Email')."',DOB = '".$this->input->post('DOB')."' where UId = ".$this->input->post('UId')."");
        
  }
  
 
  
}


?>