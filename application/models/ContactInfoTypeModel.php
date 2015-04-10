<?php

class ContactInfoTypeModel extends CI_Model{
    
     function ContactInfoTypeModel()
     {
        parent::__construct();
     }
     
      function AddContactInfoType($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_contact_info_type', $data);
        
     }
     
     function getContactInfoType()
     {
         $this->load->database();
        $sql="Select * from tbl_contact_info_type";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editContactInfoType($id)
     {
        $this->load->database();
        $sql="select * from tbl_contact_info_type where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateContactInfoType($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_contact_info_type',$data);
     }
     function deleteContactInfoType($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_contact_info_type');
     }
}
?>