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
    
    function getstates()
    {
         $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_state');
      $this->db->order_by('State_full');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
    }
    
    function getcontactname($id)
    {
         $this->load->database();
      $sql="select tbl_client_details.Client_name,tbl_address_all.* from tbl_address_all JOIN 
      tbl_client_details ON tbl_address_all.Main_Id=tbl_client_details.Client_code
      where tbl_address_all.Main_Id='$id'";
      $result = $this->db->query($sql);
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
    }
    
     function getemployee()
    {
         $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_employee_info');
      $this->db->order_by('LegalName');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
    }
    function getclienttype()
    {
         $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_client_type');
      $this->db->order_by('Key');
      $result = $this->db->get();
      $return = array();
      if($result->num_rows() > 0) 
      {
         return $result->result();
      }
        return $return;
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
        $sql="SELECT tbl_client_info.* , tbl_address_all.*, tbl_contact_info.*, tbl_client_details.* 
                FROM tbl_client_info JOIN   tbl_contact_info  ON 
                tbl_client_info.Client_code = tbl_contact_info.Main_Id JOIN tbl_address_all 
                ON tbl_contact_info.Main_Id = tbl_address_all.Main_Id JOIN tbl_client_details 
                ON tbl_client_details.Client_code=tbl_client_info.Client_code 
                where tbl_address_all.Address_name='Mailing Address'  group by tbl_contact_info.ContactId";
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
    
    function getclientLead()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
         where tbl_address_all.Address_name='Mailing Address' and tbl_client_details.Client_status=3";
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
    public function insert_file($filename, $title)
    {
        $this->load->database();
      $data = array(
         'filename'     => $filename,
         'Client_code'        => $title
      );
      $this->db->insert('tbl_files', $data);
      return $this->db->insert_id();
     }
     
     function editClient($id,$cid,$client)
     {
        $this->load->database();
        $sql="SELECT distinct tbl_address_all.*,tbl_client_details.*
        ,tbl_client_info.*,tbl_contact_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_address_all ON tbl_client_details.Client_code = tbl_address_all.Main_Id
        JOIN tbl_contact_info ON tbl_client_details.Client_code=tbl_contact_info.Main_Id
        where tbl_client_details.Client_code='$id' and tbl_address_all.Address_name='Mailing Address' 
        AND tbl_contact_info.ContactId='$cid' and tbl_client_info.Id='$client' group by tbl_contact_info.ContactId";
        $query=$this->db->query($sql);
        return $query->result();
     }
     
     function updateClient($id,$contact,$address,$client,$id)
     {
         $this->load->database();
         $this->db->where(array('Main_Id' => $id));
         $this->db->update('tbl_contact_info',$contact);
        
        $this->db->where(array('Client_code' => $code,'Id'=>$id));
         $this->db->update('tbl_client_info',$client);
        
        
         $this->db->where(array('Main_Id' => $id,'Address_name' => 'Mailing Address'));
         $this->db->update('tbl_address_all',$address);

        
     }
     ////////////////////////////////////////////////////////
     function contactdetails($id)
     {
        $this->load->database();
        $sql="select tbl_client_details.*, tbl_address_all.*,tbl_contact_info.*, tbl_client_info.*
              from tbl_client_info JOIN tbl_address_all  ON tbl_client_info.Client_code=tbl_address_all.Main_Id
              JOIN tbl_contact_info ON tbl_client_info.Client_code=tbl_contact_info.Main_Id Join 
              tbl_client_details on tbl_client_details.Client_code=tbl_client_info.Client_code
               where tbl_address_all.Address_name='Mailing Address'  and 
                tbl_address_all.Address_Id=".$id." and tbl_client_info.Id=6
              group by  tbl_address_all.Address_Id";
        $query=$this->db->query($sql);
         //return $query;
       return $query->result();
     }
    
    function addnewcontact($info,$contact,$address1,$clientDetail,$code)
     { 
        $address1['Address_name'] = "Mailing Address";
        $this->db->insert('tbl_client_info', $info);
        $this->db->insert('tbl_contact_info', $contact);
        $this->db->insert('tbl_address_all', $address1);  
        
        $this->db->where(array('Client_code' => $code));
        $this->db->update('tbl_contact_details',$clientDetail);
     }
   
   function updateClientcontact($client_id,$id,$contact_id,$add_id,$info,$contact,$address)
   {
         $this->load->database();
         $this->db->where(array('Main_Id' => $id,'ContactId'=>$contact_id));
         $this->db->update('tbl_contact_info',$contact);
         
          $this->db->where(array('Client_code' => $id,'Id'=>$client_id));
          $this->db->update('tbl_client_info',$info);
        
         $this->db->where(array('Main_Id' => $id,'Address_name' => 'Mailing Address','Address_Id'=>$add_id));
         $this->db->update('tbl_address_all',$address);
   }
   function deleteClient($contactId,$addId,$Id)
   {
        $this->load->database();
        $this->db->where('ContactId', $contactId);
        $this->db->delete('tbl_contact_info');
        
        $this->db->where('Address_Id', $addId);
        $this->db->delete('tbl_address_all'); 
        
        $this->db->where('Id', $Id);
        $this->db->delete('tbl_client_info'); 
           
   }
   
   function addNotes($addnote)
   {
        $this->load->database();
         $this->db->insert('tbl_client_general_note',$addnote);
   }
   
   function getnotesAll($id)
   {
        $this->load->database();
        $sql="select * from tbl_client_general_note where Client_code='".$id."'";
        $query=$this->db->query($sql);
         //return $query;
       return $query->result();
    
   }
   
   function getresources($id)
   {
        $this->load->database();
        $sql="select * from tbl_client_resource where Client_code='".$id."'";
        $query=$this->db->query($sql);
      
       return $query->result();
   }
   function editnotes($id)
   {
        $this->load->database();
        $sql="select * from tbl_client_general_note where Id=".$id."";
        $query=$this->db->query($sql);
         //return $query;
       return $query->result();
   }
   
   function updatenotes($id,$notesinfo)
   {
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_client_general_note',$notesinfo);
   }
   
   function addJournalnote($addjournal,$file)
   {
        $this->load->database();
         $this->db->insert('tbl_client_general_journal',$addjournal);
         $fId=$this->db->insert_id();
          $file['FId'] = $fId;
          $this->db->insert('tbl_file',$file);
   }
   
   function addclientResource($addresources)
   {
        $this->load->database();
         $this->db->insert('tbl_client_resource',$addresources);
   }
   
     
}
?>
     