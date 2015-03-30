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
    function getAllClient()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
         where tbl_address_all.Address_name='Mailing Address'";
         $query=$this->db->query($sql);
         return $query->result();
    }
    function getClientAllSorted($data)
    {
       //print_r($data['Client_status']);
    
         $this->load->database();
        $sql="SELECT distinct tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
         where tbl_address_all.Address_name='Mailing Address' and(
          tbl_client_details.Client_name='".$data['Client_name']."' or tbl_client_details.Client_code='".$data['Client_code']."' 
         or tbl_client_details.Client_priority='".$data['Client_priority']."' or tbl_client_details.Client_employee_contact='".$data['Client_employee_contact']."'
         or tbl_client_details.Client_status='".$data['Client_status']."' or tbl_address_all.City='".$data['City']."' or
         tbl_address_all.State='".$data['State']."')";
         $query=$this->db->query($sql);
        // echo $sql;
        return $query->result();
        
    }
    
    function getClientAllSearch($data)
    {
         $this->load->database();
        $sql="SELECT  tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
         where tbl_address_all.Address_name='Mailing Address' and (
          tbl_client_details.Client_name='".$data['Client_name']."' or tbl_client_details.Client_type='".$data['Client_type']."' 
          or tbl_client_details.Client_code='".$data['Client_code']."' or tbl_client_details.Client_fleet_size='".$data['Client_fleet_size']."'
          or tbl_client_details.Client_priority='".$data['Client_priority']."' or tbl_client_info.FirstName='".$data['FirstName']."'
          or tbl_client_info.LastName='".$data['LastName']."' or tbl_address_all.Address1='".$data['Address1']."' 
         or tbl_address_all.Postal_code='".$data['Postal_code']."' or tbl_address_all.Address2='".$data['Address1']."'
          or tbl_client_info.Fax_No='".$data['Fax_No']."' or tbl_client_info.Phone_No='".$data['Fax_No']."' 
           or tbl_address_all.City='".$data['City']."' or tbl_client_details.Client_status='".$data['Client_status']."' 
          or tbl_address_all.State='".$data['State']."')";
         $query=$this->db->query($sql);
        // echo $sql;
        return $query->result();
    }
    
    function getclientActive()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
         where tbl_address_all.Address_name='Mailing Address' and tbl_client_details.Client_status=1";
         $query=$this->db->query($sql);
         return $query->result();
    }
    
    function getclientInactive()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
         where tbl_address_all.Address_name='Mailing Address' and tbl_client_details.Client_status=0";
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
     