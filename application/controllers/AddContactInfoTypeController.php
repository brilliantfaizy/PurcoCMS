<?php


class AddContactInfoTypeController extends CI_Controller{
    
     public $activeMenu = 'AddContactInfoTypeController';
    function AddContactInfoTypeController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function contactinfo()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('ContactInfoType',$data);
    }
    
      function AddContactInfoType()
    {
        $msg=array();
        $this->load->model('ContactInfoTypeModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->ContactInfoTypeModel ->AddContactInfoType($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getContactInfoType()
    {
        $this->load->model('ContactInfoTypeModel');
        $data= $this->ContactInfoTypeModel->getContactInfoType();
        echo json_encode($data);
    }
    
    function editContactInfoType()
    {
        $id=$this->input->post('id');
        $this->load->model('ContactInfoTypeModel');
        $data=$this->ContactInfoTypeModel->editContactInfoType($id);
        echo json_encode($data);
    }
    function updateContactInfoType()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('ContactInfoTypeModel');
        $data=$this->ContactInfoTypeModel->updateContactInfoType($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deleteContactInfoType()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('ContactInfoTypeModel');
        $delete=$this->ContactInfoTypeModel->deleteContactInfoType($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
}
?>