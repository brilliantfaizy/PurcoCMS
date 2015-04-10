<?php

class GeneralJournalNoteModel extends CI_Model{
    
     function GeneralJournalNoteModel()
     {
        parent::__construct();
     }
     
      function AddGeneralJournal($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_gernal_journal_note', $data);
        
     }
     
     function getGeneralJournal()
     {
         $this->load->database();
        $sql="Select * from tbl_gernal_journal_note";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editGeneralJournal($id)
     {
        $this->load->database();
        $sql="select * from tbl_gernal_journal_note where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateGeneralJournal($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_gernal_journal_note',$data);
     }
     function deleteGeneralJournal($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_gernal_journal_note');
     }
}
?>