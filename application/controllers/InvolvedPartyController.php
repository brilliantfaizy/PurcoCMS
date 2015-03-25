<?php


class InvolvedPartyController extends CI_Controller{
    
      public $activeMenu = 'InvolvedPartyController';
    function InvolvedPartyController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
      
      function involved()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/InvolvedPartyView',$data);
    }
  
}
?>