<?php

class ClientGeneralJournalNoteModel extends CI_Model{
    
     function ClientGeneralJournalNoteModel()
     {
        parent::__construct();
     }
     
      function AddGeneralJournalNote($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_Client_gernal_journal_note', $data);
        
     }
     
     function getGeneralJournalNote()
     {
         $this->load->database();
        $sql="Select * from tbl_Client_gernal_journal_note";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editGeneralJournalNote($id)
     {
        $this->load->database();
        $sql="select * from tbl_Client_gernal_journal_note where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateGeneralJournalNote($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_Client_gernal_journal_note',$data);
     }
     function deleteGeneralJournalNote($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_Client_gernal_journal_note');
     }
}
?>