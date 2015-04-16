<?php


class JournalCannedController extends CI_Controller{
    
    public $activeMenu = 'JournalCannedController';
    function JournalCannedController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
  
   function jcann()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/JournalCannedView',$data);
    }
    
     function AddJCE()
    {
        $msg=array();
        $this->load->model('JournalCannedEntryModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key'),
             'Description'       => $this->input->post('description'),
             'Viewable'          => $this->input->post('viewable'),
             'Order'             => $this->input->post('order'),
             'Message'           => $this->input->post('message'),
             'LastModified'      => $date
        );
         $this->JournalCannedEntryModel->AddJCE($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getJCE()
    {
        $this->load->model('JournalCannedEntryModel');
        $data= $this->JournalCannedEntryModel->getJCE();
        echo json_encode($data);
    }
    
    function editJCE()
    {
        $id=$this->input->post('id');
        $this->load->model('JournalCannedEntryModel');
        $data=$this->JournalCannedEntryModel->editJCE($id);
        echo json_encode($data);
    }
    function updateJCE()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key'),
             'Description'       => $this->input->post('description'),
             'Viewable'          => $this->input->post('viewable'),
             'Order'             => $this->input->post('order'),
             'Message'           => $this->input->post('message'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('JournalCannedEntryModel');
        $data=$this->JournalCannedEntryModel->updateJCE($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    
    
    public function deleteJCE()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('JournalCannedEntryModel');
        $delete=$this->JournalCannedEntryModel->deleteJCE($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
  
}
?>