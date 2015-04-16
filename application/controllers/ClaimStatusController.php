<?php

class ClaimStatusController extends CI_Controller{
    
    public $activeMenu = 'AddotionalInfoController';
    function ClaimStatusController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }  
     function claimstatus()
    {    
         
         $data['base'] = $this->config->item('base_url');
         $data['css'] = $this->config->item('css');
         $this->load->view('ClaimStatusView',$data);
    }
    
      function AddClaimStatus()
    {
        $msg=array();
        $this->load->model('ClaimStatusModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'Order'             => $this->input->post('order'),
             'LastModified'      => $date
             
        );
         $this->ClaimStatusModel ->AddClaimStatus($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getClaimStatus()
    {
        $this->load->model('ClaimStatusModel');
        $data= $this->ClaimStatusModel->getClaimStatus();
        echo json_encode($data);
    }
    
    function editClaimStatus()
    {
        $id=$this->input->post('id');
        $this->load->model('ClaimStatusModel');
        $data=$this->ClaimStatusModel->editClaimStatus($id);
        echo json_encode($data);
    }
    function updateClaimStatus()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'Order'             => $this->input->post('order'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('ClaimStatusModel');
        $data=$this->ClaimStatusModel->updateClaimStatus($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    
    
    public function deleteClaimStatus()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('ClaimStatusModel');
        $delete=$this->ClaimStatusModel->deleteClaimStatus($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
  
}
?>