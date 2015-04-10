<?php


class PaymentOriginController extends CI_Controller{
    
     public $activeMenu = 'PaymentOriginController';
    function PaymentOriginController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function paymentorigin()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('PaymentOriginView',$data);
    }
    
      function Addpaymentorigin()
    {
        $msg=array();
        $this->load->model('PaymentOriginModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->PaymentOriginModel ->Addpaymentorigin($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getpaymentorigin()
    {
        $this->load->model('PaymentOriginModel');
        $data= $this->PaymentOriginModel->getpaymentorigin();
        echo json_encode($data);
    }
    
    function editpaymentorigin()
    {
        $id=$this->input->post('id');
        $this->load->model('PaymentOriginModel');
        $data=$this->PaymentOriginModel->editpaymentorigin($id);
        echo json_encode($data);
    }
    function updatepaymentorigin()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('PaymentOriginModel');
        $data=$this->PaymentOriginModel->updatepaymentorigin($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deletepaymentorigin()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('PaymentOriginModel');
        $delete=$this->PaymentOriginModel->deletepaymentorigin($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
}
?>