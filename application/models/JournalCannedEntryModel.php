<?php

class JournalCannedEntryModel extends CI_Model{
    
     function JournalCannedEntryModel()
     {
        parent::__construct();
     }
     
      function AddJCE($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_journal_canned_entry', $data);
        
     }
     
     function getJCE()
     {
         $this->load->database();
        $sql="Select * from tbl_journal_canned_entry";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editJCE($id)
     {
        $this->load->database();
        $sql="select * from tbl_journal_canned_entry where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateJCE($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_journal_canned_entry',$data);
     }
     function deleteJCE($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_journal_canned_entry');
     }
}
?>