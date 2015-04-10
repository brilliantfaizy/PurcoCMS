<?php


class OrganizationController extends CI_Controller{
    
     public $activeMenu = 'OrganizationController';
    function OrganizationController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function organization()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Organization/OrganizationType',$data);
    }
    
      function AddOrganizationType()
    {
        $msg=array();
        $this->load->model('OrganizationTypeModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->OrganizationTypeModel ->AddOrganizationType($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getOrganizationType()
    {
        $this->load->model('OrganizationTypeModel');
        $data= $this->OrganizationTypeModel->getOrganizationType();
        echo json_encode($data);
    }
    
    function editOrganizationType()
    {
        $id=$this->input->post('id');
        $this->load->model('OrganizationTypeModel');
        $data=$this->OrganizationTypeModel->editOrganizationType($id);
        echo json_encode($data);
    }
    function updateOrganizationType()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('OrganizationTypeModel');
        $data=$this->OrganizationTypeModel->updateOrganizationType($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deleteOrganizationType()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('OrganizationTypeModel');
        $delete=$this->OrganizationTypeModel->deleteOrganizationType($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
}
?>