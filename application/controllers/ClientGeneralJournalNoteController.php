<?php


class ClientGeneralJournalNoteController extends CI_Controller{
    
     public $activeMenu = 'ClientGeneralJournalNoteController';
    function ClientGeneralJournalNoteController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function Clientnote()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
         $this->load->view('ClientGeneralJournalNote',$data);
    }
    
      function AddGeneralJournalNote()
    {
        $msg=array();
        $this->load->model('ClientGeneralJournalNoteModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->ClientGeneralJournalNoteModel ->AddGeneralJournalNote($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    
    function getGeneralJournalNote()
    {
        $this->load->model('ClientGeneralJournalNoteModel');
        $data= $this->ClientGeneralJournalNoteModel->getGeneralJournalNote();
        echo json_encode($data);
    }
    
    function editGeneralJournalNote()
    {
        $id=$this->input->post('id');
        $this->load->model('ClientGeneralJournalNoteModel');
        $data=$this->ClientGeneralJournalNoteModel->editGeneralJournalNote($id);
        echo json_encode($data);
    }
    function updateGeneralJournalNote()
    {
        
        $id=$this->input->post('typeId');
        $msg=array();
        
        $date = date("Y-m-d h:i:s");
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
        
        $this->load->model('ClientGeneralJournalNoteModel');
        $data=$this->ClientGeneralJournalNoteModel->updateGeneralJournalNote($id,$data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function deleteGeneralJournalNote()
    {
        $msg=array();
        $id=$this->uri->segment(3);
        $this->load->model('ClientGeneralJournalNoteModel');
        $delete=$this->ClientGeneralJournalNoteModel->deleteGeneralJournalNote($id);
        $msg['msg']="Deleted";
        echo json_encode($msg);
   }
}
?>