<?php

class main extends CI_Controller
{
    
    public $activeMenu = "dashboard";
    
    
    function main()
    {
        
        parent::__construct();
        
        
    }
    
    function dashboard()
    {
        
         
         $data['base'] = $this->config->item('base_url');
         $data['css'] = $this->config->item('css');
         $this->load->model('mainModel');
         $this->load->helper('url');
         $this->mainModel->checkSession();
         $this->load->view('Dashboard',$data);
      


    }
    
    
     function testing(){
        
        $this->load->model('mainModel');
        print_r($this->mainModel->GetProfile());
        
    }
    
    function login()
    {
        
        $data['base'] = $this->config->item('base_url');
        $data['css']  = $this->config->item('css');
        //load the session library
        $this->load->library('session');
        $this->load->model('mainModel');
        $this->load->helper('url');
        
        if ($this->input->post('mysubmit')) {
            
            
            if ($this->input->post('Username') != "" && $this->input->post('Password') != "") {
                
                foreach ($this->mainModel->check_user() as $row) {
                    
                    if ($row->User) {
                        
                        $Role = $this->mainModel->GetRoleTitle($row->RId);
                        
                        $this->session->set_userdata('Username', $row->Username);
                        $this->session->set_userdata('Role', $Role);
                        $this->session->set_userdata('Rid',$row->RId);
                        
                        
                        
                        if($row->Status && count($this->mainModel->GetMenus($row->RId)) != 0){
                        
                        
                         redirect($this->mainModel->GetMenus($row->RId)[0]->Path);
                        
                        
                        } else {
                            
                             echo "<script>alert('user is disabled.');</script>";
                        }
                        
                    } else if ($row->Username == "") {
                        
                        echo "<script>alert('user not exists.');</script>";
                        
                        
                    } else {
                        
                        echo "<script>alert('Invalid user name or password.');</script>";
                        
                        
                    }
                    
                    
                }
                
            } else {
                
                echo "<script>alert('field is empty');</script>";
                
                
            }
            
            
            
            
        }
        $this->load->view('login', $data);
        
    }
    
    function welcome(){
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        
         if ($this->input->post('updateProfile')) {
            
              //  $this->mainModel->UpdateProfile();
                
           $this->load->database();
        $this->load->model('RoleModel');
        $id= $this->input->post('id');
        $this->load->library('form_validation');
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]|matches[conf]');
      $this->form_validation->set_rules('conf', 'Confirm Password', 'required');
      $this->form_validation->set_rules('fname', 'First Name', 'required');
      $this->form_validation->set_rules('lname', 'Last Name', 'required');
      $this->form_validation->set_rules('dob', 'DOB', 'required');
   
     if ($this->form_validation->run() == FALSE)
     {
        echo '<script>alert("Fill the data properly");</script>';
        //$this->viewupdate();
     }
  
     
    
    
    else
    {
        
        $b = $this->input->post('password');
        
        
        $g = $this->input->post('fname');
        $h = $this->input->post('lname');
     
        $j = $this->input->post('dob');  
                
        $sql="update tbl_user set Password='".$b."' where UId='".$id."'";
        $this->db->query($sql);
        
       
        
        $sql2="update tbl_profile set First_name='".$g."',Last_name='".$h."',DOB='".$j."' where UId='".$id."'";
        
       
        $this->db->query($sql2);  
            echo "<script> alert('Updated');</script>";
            //$this->viewupdate();
        }
            
         } 
       
        
        if($this->mainModel->checkSession() != false && $this->mainModel->checkSession()[1] == "user"){
                    
        
        foreach($this->mainModel->GetProfile($this->mainModel->checkSession()[0]) as $row){
            
           $data['UId'] = $row->UId;
           $data['Username'] = $row->Username;
           $data['Password'] = $row->Password;
           $data['Email'] = $row->Email;
           $data['First_name'] = $row->First_name;
           $data['Last_name'] = $row->Last_name;
           $data['DOB'] = $row->DOB;
           
        }
        
        $this->load->view('user',$data);
        
            
        } else {
            
            
            redirect('main/login');
            
        }
        
    }
    
    function index()
    {
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
       // if( != false){*/
            
        //print_r($this->mainModel->checkSession());            
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $this->load->view('welcome',$data);
            
       /* } else {
            
            
            redirect('main/login');
            
        }*/
        
    }
    
    function logout()
    {
        
        $this->load->library('session');
        $this->session->unset_userdata('Username');
        $this->login();
        
    }
    
    
    function visitor(){
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        
        if($this->mainModel->checkSession() != false && $this->mainModel->checkSession()[1] == "visitor"){
            
        //print_r($this->mainModel->checkSession());            
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $this->load->view('visitor',$data);
            
        } else {
            
            
            redirect('main/login');
            
        }
        
       
        
    }
    
    
    function managerole(){
        
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        
        $this->load->view('managerole',$data);
        
    }
    
    
    
    
}


?>