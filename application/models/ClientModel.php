<?php

class ClientModel extends CI_Model{
    
     function ClientModel()
     {
        parent::__construct();
     }
     function insert_users($details,$info,$contact,$address1,$address2)
     {
        $this->db->insert('tbl_client_details', $details);
        $address1['Address_name'] = "Mailing Address";
        $address2['Address_name'] = "Residential Address";
        $this->db->insert('tbl_client_info', $info);
        $this->db->insert('tbl_contact_info', $contact);
        $this->db->insert('tbl_address_all', $address1);
        $this->db->insert('tbl_address_all', $address2);
   }
    
    function insert_client_type($data)
    {
        $this->load->database();
         $this->db->insert('tbl_client_type', $data);
    }
    
    function getType()
    {
        $this->load->database();
        $sql="Select * from tbl_client_type";
        $query=$this->db->query($sql);
        return $query->result();
    }
    function ClientTypeDelete($id)
    {
        $this->load->database();
        $sql="delete from tbl_client_type where Id='".$id."'";
        $query=$this->db->query($sql);
        //return $query->result();
    }
}
?>
     