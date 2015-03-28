<?php

class ClientModel extends CI_Model{
    
     function ClientModel()
     {
        parent::__construct();
     }
     function insert_users($details,$info,$contact,$address1,$address2){
        $this->db->insert('tbl_client_details', $details);

    $info['Client_code'] = $this->db->insert_id();
    $contact['Main_Id'] = $this->db->insert_id();
    $address1['Main_Id'] = $this->db->insert_id();
    $address2['Main_Id'] = $this->db->insert_id();
    $address1['Address_name'] = "Mailing Address";
    $address2['Address_name'] = "Residential Address";

    $this->db->insert('tbl_client_info', $info);
    $this->db->insert('tbl_contact_info', $contact);
    $this->db->insert('tbl_address_all', $address1);
    $this->db->insert('tbl_address_all', $address2);
    


    }
}
?>
     