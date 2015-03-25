<?php


class ReportController extends CI_Controller{
    
     public $activeMenu = 'ReportController';
    function ReportController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function create()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'create';
         $this->load->view('Report/CreateReport',$data);
    }
    
     function import()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'import';
         $this->load->view('Report/ImportReport',$data);
    }
     function export()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'export';
         $this->load->view('Report/ExportReport',$data);
    }
}
?>