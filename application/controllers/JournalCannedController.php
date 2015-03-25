<?php


class JournalCannedController extends CI_Controller{
    
      public $activeMenu = 'JournalCannedController';
    function JournalCannedController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
   function jcann()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/JournalCannedView',$data);
    }
  
}
?>