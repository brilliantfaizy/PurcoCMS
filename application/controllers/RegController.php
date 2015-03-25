<?php


class RegController extends CI_Controller{
    public $activeMenu = 'RegController';
    function RegController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
    }
    
    
    
    function getall() 
    {
       
         
       $this->load->model('mainModel');
       $this->load->helper('url');
       
        
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'getall';
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('RegModel');
        //print_r($this->RegModel->allrecord());
        $data['query']=$this->RegModel->allrecord();
        //print_r($data['query']);
        //$data['dep_list']= $this->RegModel->getDepartment();
        $data['role_list'] = $this->RegModel->getRole(); 
        
        
      if ($this->input->post('submit')) { 
            
         
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]|alpha');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]|matches[conf]');
      $this->form_validation->set_rules('conf', 'Confirm Password', 'required');
      $this->form_validation->set_rules('fname', 'Full Name', 'required');
     
      $this->form_validation->set_rules('email', 'Email', 'required|email');
     
   
     if ($this->form_validation->run() == FALSE)
     {
        echo '<script>alert("Fill the data properly");</script>';
       // $this->getall();
       
     }
    elseif($this->input->post('rId')=='empty')
    {
        echo '<script>alert("Select the Role First");</script>';
        //$this->getall();
    }
   
     elseif($this->input->post('status')=='empty')
    {
        echo '<script>alert("Select the Status First");</script>';
        //$this->getall();
    }
    
    
    
    else
    {
        $this->db->where('Username ', $this->input->post('username'));
        $query = $this->db->get('tbl_user');
        $this->db->where('Email ', $this->input->post('email'));
        $query1 = $this->db->get('tbl_user');
        if($query->num_rows > 0 )
        { 
    
            echo "<script>alert('User name already exist');</script>";
            //$this->getall();     
        }
        elseif($query1->num_rows > 0)
        { 
    
            echo "<script>alert('Email address already exist');</script>";
           // $this->getall();
             
        
        }
       else
       {
        $a = $this->input->post('rId');
        $b = $this->input->post('username');
        $c = $this->input->post('password');
        $d = $this->input->post('fname');
        $e = $this->input->post('email');
        $f = $this->input->post('status');
        
       
        $sql= "insert into tbl_user(RId,Username,Password,Full_name,Email,Status,DateModified,CreationDate) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'),DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'))";
    

        $this->db->query($sql);
        $id=$this->db->insert_id();
 
        
        echo "<script>alert('Added');</script>";
        //$this->getall();
        
        redirect('RegController/getall', 'refresh'); 
        }
  
    }
            
            
           }
           
           $this->load->view('RegAllView',$data);
      
   }
 

    function insertview()
    {
      $this->load->database();
      $this->load->model('RegModel');
      //$data['dep_list']= $this->RegModel->getDepartment();
      $data['role_list'] = $this->RegModel->getRole(); 
      $this->load->view('RegInsertView',$data); 
    }
    
    function insert() 
    {
    
    //redirect('RegController/getall');
    
    }
 
 
 
    function viewupdate()
    {
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        if($this->mainModel->checkSession() != false && $this->mainModel->checkSession()[1] == "Admin"){ 
        
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'getall';
        //$this->load->helper('url');
        $id = $this->uri->segment(3);
        $this->load->model('RegModel');
        $data['base'] = $this->config->item('base_url');
       
        $data['query']=$this->RegModel->allrecord();
        //$data['students']=$this->RegModel->getall1();
        $data['single_student'] = $this->RegModel->viewupdate($id);
        
       // $data['dep_list']= $this->RegModel->getDepartment();
        $data['role_list'] = $this->RegModel->getRole(); 
        $this->load->library('form_validation');
         if ($this->input->post('submit')) { 
            
         
     // $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]|alpha');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]|matches[conf]');
      $this->form_validation->set_rules('conf', 'Confirm Password', 'required');
      $this->form_validation->set_rules('fname', 'Full Name', 'required');
     
     // $this->form_validation->set_rules('email', 'Email', 'required|email');
     
   
     if ($this->form_validation->run() == FALSE)
     {
        echo '<script>alert("Fill the data properly");</script>';
       // $this->getall();
       
     }
    elseif($this->input->post('rId')=='empty')
    {
        echo '<script>alert("Select the Role First");</script>';
        //$this->getall();
    }
   
     elseif($this->input->post('status')=='empty')
    {
        echo '<script>alert("Select the Status First");</script>';
        //$this->getall();
    }
    
    
    
    
        
       else
       {
     $a = $this->input->post('rId');
        //$b = $this->input->post('username');
        $c = $this->input->post('password');
        $d = $this->input->post('fname');
       // $e = $this->input->post('email');
        $f = $this->input->post('status');
        $g = date("Y/m/d"); 
                
        $sql="update tbl_user set Password='".$c."',RId='".$a."',Full_name='".$d."',Status='".$f."',DateModified=DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s') where UId='".$id."'";
        $this->db->query($sql);
        
       
            echo "<script> alert('Updated');</script>";
            //$this->viewupdate();
            redirect('RegController/viewupdate/'.$id.'', 'refresh'); 
        }
        
}
    
        
        
        $this->load->view('RegUpdateView', $data);
        
        }
        
        else {
            
            
            redirect('main/login');
            
        }
    }

    function viewdelete()
    {
        $id = $this->uri->segment(3);
        $this->load->model('RegModel');
        $data['base'] = $this->config->item('base_url');
        $data['students']=$this->RegModel->getall1();
        $data['single_student'] = $this->RegModel->viewdelete($id);
        $this->load->view('RegDeleteView', $data);
    
    }
    function update() 
    {    
        $this->load->database();
        $this->load->model('RoleModel');
        $id= $this->input->post('id');
        $this->load->library('form_validation');
       if ($this->input->post('submit')) { 
            
         
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]|alpha');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]|matches[conf]');
      $this->form_validation->set_rules('conf', 'Confirm Password', 'required');
      $this->form_validation->set_rules('fname', 'Full Name', 'required');
     
      $this->form_validation->set_rules('email', 'Email', 'required|email');
     
   
     if ($this->form_validation->run() == FALSE)
     {
        echo '<script>alert("Fill the data properly");</script>';
       // $this->getall();
       
     }
    elseif($this->input->post('rId')=='empty')
    {
        echo '<script>alert("Select the Role First");</script>';
        //$this->getall();
    }
   
     elseif($this->input->post('status')=='empty')
    {
        echo '<script>alert("Select the Status First");</script>';
        //$this->getall();
    }
    
    
    
    
        
       else
       {
     $a = $this->input->post('rId');
        $b = $this->input->post('username');
        $c = $this->input->post('password');
        $d = $this->input->post('fname');
       $e = $this->input->post('email');
        $f = $this->input->post('status');
        $g = date("Y/m/d"); 
                
        $sql="update tbl_user set Password='".$c."',RId='".$a."',Full_name='".$d."',Status='".$f."',DateModified='".$g."' where UId='".$id."'";
        $this->db->query($sql);
            echo "<script> alert('Updated');</script>";
            $this->viewupdate();
        }
}
    }
 
    function delete($id)
    {
        $this->load->helper('url');
        $this->load->database();
        //$this->load->model('RegModel');
        //$id= $this->input->post('id');
        
        //echo $id;
        $sql= "update tbl_user set Status=0 where UId='".$id."'";
        $this->db->query($sql);
        redirect('RegController/getall', 'refresh');
           
        //$this->getall();
      

    }



}


?>