<?php


class LibraryController extends CI_Controller{
    
    public $activeMenu = "search";
    function LibraryController()
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
       $data['innerMenuActive'] = 'search';
       $this->load->view('library/SearchLibrary',$data);
    }
}
?>