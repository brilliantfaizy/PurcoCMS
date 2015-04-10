<?php

class AmountTypeController extends CI_Controller{
    
    public $activeMenu = 'AmountTypeController';
    function AmountTypeController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }  
     function amountType()
    {    
         
         $data['base'] = $this->config->item('base_url');
         $data['css'] = $this->config->item('css');
         $this->load->view('AmountTypeView',$data);
    }
    
      function AddamountType()
    {
        $msg=array();
        $this->load->model('AmountTypeModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'Order'             => $this->input->post('order'),
             'Parent'            => $this->input->post('parent'),
             'Toclient'         => "",
             'Topurco'          => "",
             'LastModified'      => $date
             
        );
         $this->AmountTypeModel ->AddamountType($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getamountType()
    {
        $this->load->model('AmountTypeModel');
        $data= $this->AmountTypeModel->getamountType();
        echo json_encode($data);
    }
    
    function editamountType()
    {
        $id=$this->input->post('id');
        $this->load->model('AmountTypeModel');
        $data=$this->AmountTypeModel->editamountType($id);
        echo json_encode($data);
    }
    function updateamountType()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
            'Key'               => $this->input->post('key1'),
             'Description'      => $this->input->post('description'),
             'Order'            => $this->input->post('order'),
             'Parent'           => $this->input->post('parent'),
             'Toclient'         => $this->input->post('client1'),
             'Topurco'          => $this->input->post('purco1'),
             'LastModified'     => $date
             
        );
        
        $this->load->model('AmountTypeModel');
        $data=$this->AmountTypeModel->updateamountType($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    
  
    public function deleteamountType()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('AmountTypeModel');
        $delete=$this->AmountTypeModel->deleteamountType($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
  
}
?>