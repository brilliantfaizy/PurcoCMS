<?php


class DeptController extends CI_Controller{
    
    function DeptController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
    }
    
    function getall() {
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        if($this->mainModel->checkSession() != false && $this->mainModel->checkSession()[1] == "admin"){ 
        $query['base'] = $this->config->item('base_url');
        $query['css'] = $this->config->item('css');
        $this->load->database();
        $this->load->model('DeptModel');
  
        $q=$this->db->get('tbl_department');
        $query['query']= $q->result();
        $this->load->view('DeptAllView',$query);
        
        } else {
            
            
            redirect('main/login');
            
        }
       
     
  }
 

function insertview()
{
    $this->load->view('DeptInsertView'); 
}
function insert() {
     $this->load->helper('url');
    $this->load->database();
    $this->load->model('DeptModel');
      $this->load->library('form_validation');

$this->form_validation->set_rules('deptitle', 'Dept Title', 'required|min_length[2]|max_length[15]');


if ($this->form_validation->run() == FALSE)
{
    echo '<script>alert("Fill the data properly");</script>';
   //$this->load->view('DeptInsertView');
    $this->getall();
}
else
{
    //$this->load->library('form_validation');
    
    $data = array(
    'Dep_title' => $this->input->post('deptitle')
    
    );

  $this->db->insert('tbl_department',$data);
  //$this->load->view('myInsert');
  //return $this->db->insert_id();
 // $this->getall();
 redirect('DeptController/getall');
 }
  
}
 
 
 
 function viewupdate(){
    
      $this->load->model('mainModel');
        $this->load->helper('url');
        if($this->mainModel->checkSession() != false && $this->mainModel->checkSession()[1] == "admin"){ 
    
    
     $data['base'] = $this->config->item('base_url');
    $data['css'] = $this->config->item('css');
    $id = $this->uri->segment(3);
    $this->load->model('DeptModel');

    $data['base'] = $this->config->item('base_url');
    $data['students']=$this->DeptModel->getall1();
    $data['single_student'] = $this->DeptModel->viewupdate($id);
    //print_r($this->RoleModel->viewupdate($id));
    $this->load->view('DeptUpdateView', $data);
    
    }
    else {
            
            
            redirect('main/login');
            
        }
   
    
 }

function viewupdate1(){
    $id = $this->uri->segment(3);
    $this->load->model('DeptModel');

    $data['base'] = $this->config->item('base_url');
    $data['students']=$this->DeptModel->getall1();
    $data['single_student'] = $this->DeptModel->viewupdate($id);

    $this->load->view('DeptDeleteView', $data);
    
 }
function update() {
   
        $this->load->helper('url');
    $this->load->database();
    $this->load->model('DeptModel');
    $id= $this->input->post('id');
     $this->load->library('form_validation');

$this->form_validation->set_rules('deptitle', 'Dept Title', 'required|min_length[2]|max_length[15]');


if ($this->form_validation->run() == FALSE)
{
    echo '<script>alert("Fill the data properly");</script>';
   $this->load->view('DeptUpdateView');
}
else
{
    $data = array(
    'Dep_title' => $this->input->post('deptitle')
    );
    $this->DeptModel->update($id,$data);
    $this->viewupdate();
 
}

redirect('DeptController/getall');

 }
 
function delete(){
    
    $this->load->helper('url');
    
    $this->load->database();
    $this->load->model('DeptModel');
    $id = $this->uri->segment(3);
    $this->DeptModel->delete($id);
    //$this->viewupdate1();
    redirect('DeptController/getall');

}



}
?>