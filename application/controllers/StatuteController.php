<?php


class StatuteController extends CI_Controller{
    
    public $activeMenu = 'Statutesearch';
    
    function StatuteController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    
    function search()
    {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $this->load->view('statute/Statute',$data);
    }
    
}
?>