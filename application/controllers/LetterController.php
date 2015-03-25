<?php


class LetterController extends CI_Controller{
    
     public $activeMenu = 'letter';
    
    function LetterController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function letter()
    {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $this->load->view('letter/Letter',$data);
    }
}
?>