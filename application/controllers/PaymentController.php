<?php


class PaymentController extends CI_Controller{
    
     public $activeMenu = "PaymentController";
    
    function PaymentController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function payment()
    {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $data['innerMenuActive'] = 'payment';
       $this->load->view('payments/PaymentView',$data);
    }
    
    function addpayment()
    {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $data['innerMenuActive'] = 'addpayment';
       $this->load->view('payments/AddPaymentView',$data);
    }
     function paymentorigin()
     {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $data['innerMenuActive'] = 'paymentorigin';
       $this->load->view('payments/PaymentOriginView',$data);
     }
}
?>