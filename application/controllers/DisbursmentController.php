<?php


class DisbursmentController extends CI_Controller{
    
     public $activeMenu = 'DisbursmentController';
    function DisbursmentController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function disbursmentinfo()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $data['innerMenuActive'] = 'disbursmentinfo';
         $this->load->view('Disbursment/DisbursmentInfo',$data);
    }
    function disbursmentpayment()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $data['innerMenuActive'] = 'disbursmentpayment';
         $this->load->view('Disbursment/DisbursmentPaymentInfo',$data);
    }
}
?>