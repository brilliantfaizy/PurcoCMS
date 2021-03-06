<?php


class InvolvedPartyController extends CI_Controller{
    
      public $activeMenu = 'InvolvedPartyController';
    function InvolvedPartyController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
      
      function involved()
    {
       $data['base'] = $this->config->item('base_url');
       $data['css'] = $this->config->item('css');
       $this->load->view('Automobile/InvolvedPartyView',$data);
    }
    
    function AddInvolvedPartyType()
    {
        $msg=array();
        $this->load->model('InvolvedPartyModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->InvolvedPartyModel ->AddInvolvedPartyType($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getTypeOfPartyAll()
    {
        $this->load->model('InvolvedPartyModel');
        $data= $this->InvolvedPartyModel->getTypeOfPartyAll();
        echo json_encode($data);
    }
    
    function editpartytype()
    {
        $id=$this->input->post('id');
        $this->load->model('InvolvedPartyModel');
        $data=$this->InvolvedPartyModel->editpartytype($id);
        echo json_encode($data);
    }
    function updatepartytype()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('InvolvedPartyModel');
        $data=$this->InvolvedPartyModel->updatepartytype($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deletepartytype()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('InvolvedPartyModel');
        $delete=$this->InvolvedPartyModel->deletepartytype($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
  
}
?>