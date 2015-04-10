<?php


class GeographicalController extends CI_Controller{
    
      public $activeMenu = 'GeographicalController';
    function GeographicalController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
      
    function location()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/LocationView',$data);
    }
     function Addlocation()
    {
        $msg=array();
        $this->load->model('GeographicalLocationModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Province'             => $this->input->post('province'),
             'Pro_Abbreviation'     => $this->input->post('proAbbreviation'),
             'Country'              => $this->input->post('country'),
             'Cont_Abbreviation'    => $this->input->post('countryAbbreviation'),
             'LastModified'         => $date
             
        );
         $this->GeographicalLocationModel->Addlocation($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getlocation()
    {
        $this->load->model('GeographicalLocationModel');
        $data= $this->GeographicalLocationModel->getlocation();
        echo json_encode($data);
    }
    
    function editlocation()
    {
        $id=$this->input->post('id');
        $this->load->model('GeographicalLocationModel');
        $data=$this->GeographicalLocationModel->editlocation($id);
        echo json_encode($data);
    }
    function updatelocation()
    {
        
        $id=$this->input->post('locationId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Province'             => $this->input->post('province'),
             'Pro_Abbreviation'     => $this->input->post('proAbbreviation'),
             'Country'              => $this->input->post('country'),
             'Cont_Abbreviation'    => $this->input->post('countryAbbreviation'),
             'LastModified'         => $date
             
        );
        
        $this->load->model('GeographicalLocationModel');
        $data=$this->GeographicalLocationModel->updatelocation($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deletelocation()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('GeographicalLocationModel');
        $delete=$this->GeographicalLocationModel->deletelocation($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
    
  
}
?>