<?php

class AddotionalInfoController extends CI_Controller{
    
    public $activeMenu = 'AddotionalInfoController';
    function AddotionalInfoController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }  
     function additionalinfo()
    {    
         
         $data['base'] = $this->config->item('base_url');
         $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/AdditionalinfoView',$data);
    }
    
      function AddAdditionalInfo()
    {
        $msg=array();
        $this->load->model('AddotionalInfoModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->AddotionalInfoModel ->AddAdditionalInfo($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getAdditionalInfo()
    {
        $this->load->model('AddotionalInfoModel');
        $data= $this->AddotionalInfoModel->getAdditionalInfo();
        echo json_encode($data);
    }
    
    function editAdditionalInfo()
    {
        $id=$this->input->post('id');
        $this->load->model('AddotionalInfoModel');
        $data=$this->AddotionalInfoModel->editAdditionalInfo($id);
        echo json_encode($data);
    }
    function updateAdditionalInfo()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('AddotionalInfoModel');
        $data=$this->AddotionalInfoModel->updateAdditionalInfo($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    
     function FilterAdditionalInfo()
    {
        
        $id=$this->input->post('typeId');
        $filter1 = $this->input->post('filterID');
   
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Filter'            => $filter1,
             'LastModified'      => $date
             
        );
        
        $this->load->model('AddotionalInfoModel');
        $this->AddotionalInfoModel->updateAdditionalInfo($id,$data);
        $msg['msg']=$filter1;
        echo json_encode($msg);
    }
    public function deleteAdditionalInfo()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('AddotionalInfoModel');
        $delete=$this->AddotionalInfoModel->deleteAdditionalInfo($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
  
}
?>