<?php


class GeographicalController extends CI_Controller{
    
      public $activeMenu = 'GeographicalController';
    function GeographicalController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
      
    function location()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/LocationView',$data);
    }
    
  
}
?>