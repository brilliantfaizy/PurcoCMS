<?php


class AutomobileController extends CI_Controller{
    
      public $activeMenu = 'AutomobileController';
    function AutomobileController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function make()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/AutomobileMakeReport',$data);
    }
    function Insertmake()
    {
        $msg=array();
        $this->load->model('AutomobileModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
        $data = array(
             'Make'              => $this->input->post('make'),
             'LastModified'      => $date    
        );
         $this->AutomobileModel->Insertmake($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
  
   
   
   
}
?>