<?php


class OrganizationController extends CI_Controller{
    
     public $activeMenu = 'OrganizationController';
    function OrganizationController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function organization()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Organization/OrganizationType',$data);
    }
}
?>