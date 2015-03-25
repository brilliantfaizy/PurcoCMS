<?php


class CheckController extends CI_Controller{
    
      public $activeMenu = 'CheckController';
    function CheckController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
     function check()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/CheckView',$data);
    }
    
  
}
?>