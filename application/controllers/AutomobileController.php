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
  
   
   
   
}
?>