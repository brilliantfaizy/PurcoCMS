<?php


class CalenderController extends CI_Controller{
    
    public $activeMenu = 'calender';
    
    function CalenderController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function calender()
    {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $data['innerMenuActive'] = 'calender';
       $this->load->view('calender/Calender',$data);
    }
}
?>