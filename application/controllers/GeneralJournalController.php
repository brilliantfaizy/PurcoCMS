<?php
class GeneralJournalController extends CI_Controller{
    
     public $activeMenu = 'GeneralJournalController';
    function GeneralJournalController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function GernalJournal()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('GeneralJournalNote',$data);
    }
    
      function AddGeneralJournal()
    {
        $msg=array();
        $this->load->model('GeneralJournalNoteModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->GeneralJournalNoteModel ->AddGeneralJournal($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getGeneralJournal()
    {
        $this->load->model('GeneralJournalNoteModel');
        $data= $this->GeneralJournalNoteModel->getGeneralJournal();
        echo json_encode($data);
    }
    
    function editGeneralJournal()
    {
        $id=$this->input->post('id');
        $this->load->model('GeneralJournalNoteModel');
        $data=$this->GeneralJournalNoteModel->editGeneralJournal($id);
        echo json_encode($data);
    }
    function updateGeneralJournal()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('GeneralJournalNoteModel');
        $data=$this->GeneralJournalNoteModel->updateGeneralJournal($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deleteGeneralJournal()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('GeneralJournalNoteModel');
        $delete=$this->GeneralJournalNoteModel->deleteGeneralJournal($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
}
?>