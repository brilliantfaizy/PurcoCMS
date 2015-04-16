<?php

class ClientModel extends CI_Model{
    
     function ClientModel()
     {
        parent::__construct();
     }
     function insert_users($details,$info,$contact,$address1)
     {
        $this->load->database();
        $this->db->insert('tbl_client_details', $details);
        $contact['Address_name'] = "Mailing Address";
        $address1['Address_name'] = "Residential Address";
        $this->db->insert('tbl_client_info', $info);
        $this->db->insert('tbl_client_contact_info', $contact);
        $this->db->insert('tbl_client_contact_info', $address1);
    
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
      $sql="select tbl_client_details.Client_name,tbl_client_contact_info.* from tbl_client_contact_info JOIN 
      tbl_client_details ON tbl_client_contact_info.Client_code =tbl_client_details.Client_code 
       where tbl_client_contact_info.Client_code='$id' and tbl_client_contact_info.Address_name='Mailing Address'";
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
    
     function getclientgeneraljournal()
    {
         $this->load->database();
      $this->db->select('*');
      $this->db->from('tbl_client_gernal_journal_note');
      $this->db->order_by('Key');
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
        $sql="SELECT tbl_client_info.* , tbl_client_contact_info.* ,tbl_client_details.* 
                FROM tbl_client_info JOIN   tbl_client_contact_info  ON 
                tbl_client_info.Client_code = tbl_client_contact_info.Client_code  JOIN tbl_client_details 
                ON tbl_client_details.Client_code=tbl_client_info.Client_code 
                where tbl_client_contact_info.Address_name='Mailing Address' group by  tbl_client_details.Client_code";
         $query=$this->db->query($sql);
         return $query->result();
    }
    function getClientAllSorted($data)
    {
       //print_r($data['Client_status']);
    
         $this->load->database();
        $sql="SELECT distinct tbl_client_contact_info.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_client_contact_info ON tbl_client_details.Client_code = tbl_client_contact_info.Client_code
         where tbl_client_contact_info.Address_name='Mailing Address' and(
          tbl_client_details.Client_name='".$data['Client_name']."' or tbl_client_details.Client_code='".$data['Client_code']."' 
         or tbl_client_details.Client_priority='".$data['Client_priority']."' or tbl_client_details.Client_employee_contact='".$data['Client_employee_contact']."'
         or tbl_client_details.Client_status='".$data['Client_status']."' or tbl_client_contact_info.City='".$data['City']."' or
         tbl_client_contact_info.State='".$data['State']."') group by  tbl_client_details.Client_code";
         $query=$this->db->query($sql);
        // echo $sql;
        return $query->result();
        
    }
    
    function getClientAllSearch($data)
    {
         $this->load->database();
        $sql="SELECT  tbl_client_contact_info.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_client_contact_info ON tbl_client_details.Client_code = tbl_client_contact_info.Client_code
         where tbl_client_contact_info.Address_name='Mailing Address' and (
          tbl_client_details.Client_name='".$data['Client_name']."' or tbl_client_details.Client_type='".$data['Client_type']."' 
          or tbl_client_details.Client_code='".$data['Client_code']."' or tbl_client_details.Client_fleet_size='".$data['Client_fleet_size']."'
          or tbl_client_details.Client_priority='".$data['Client_priority']."' or tbl_client_info.FirstName='".$data['FirstName']."'
          or tbl_client_info.LastName='".$data['LastName']."' or tbl_client_contact_info.Address1='".$data['Address1']."' 
         or tbl_client_contact_info.Postal_code='".$data['Postal_code']."' or tbl_client_contact_info.Address2='".$data['Address1']."'
          or tbl_client_info.Fax_No='".$data['Fax_No']."' or tbl_client_info.Phone_No='".$data['Fax_No']."' 
           or tbl_client_contact_info.City='".$data['City']."' or tbl_client_details.Client_status='".$data['Client_status']."' 
          or tbl_client_contact_info.State='".$data['State']."') group by  tbl_client_details.Client_code";
         $query=$this->db->query($sql);
        // echo $sql;
        return $query->result();
    }
    
    function getclientActive()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_client_contact_info.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_client_contact_info ON tbl_client_details.Client_code = tbl_client_contact_info.Client_code
         where tbl_client_contact_info.Address_name='Mailing Address' and tbl_client_details.Client_status=1  
         group by  tbl_client_details.Client_code";
         $query=$this->db->query($sql);
         return $query->result();
    }
    
    function getclientLead()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_client_contact_info.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_client_contact_info ON tbl_client_details.Client_code = tbl_client_contact_info.Client_code
         where tbl_client_contact_info.Address_name='Mailing Address' and tbl_client_details.Client_status=3
         group by  tbl_client_details.Client_code";
         $query=$this->db->query($sql);
         return $query->result();
    }
    function getclientInactive()
    {
        $this->load->database();
        $sql="SELECT distinct tbl_client_contact_info.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_client_contact_info ON tbl_client_details.Client_code = tbl_client_contact_info.Client_code 
         where tbl_client_contact_info.Address_name='Mailing Address' and tbl_client_details.Client_status=0 
         group by  tbl_client_details.Client_code";
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
        $sql="SELECT distinct tbl_client_contact_info.*,tbl_client_details.*
        ,tbl_client_info.* FROM tbl_client_details JOIN tbl_client_info 
        ON tbl_client_details.Client_code = tbl_client_info.Client_code 
        JOIN tbl_client_contact_info ON tbl_client_details.Client_code = tbl_client_contact_info.Client_code
        where tbl_client_details.Client_code='$id' and tbl_client_contact_info.Address_name='Mailing Address' 
        AND tbl_client_contact_info.ContactId='$cid' and tbl_client_info.Id='$client' group by tbl_client_contact_info.ContactId";
        $query=$this->db->query($sql);
        return $query->result();
     }
     
     function updateClient($code,$address,$client,$id)
     {
         $this->load->database();
         $this->db->where(array('Client_code' => $code,'Id'=>$id));
         $this->db->update('tbl_client_info',$client);
         $this->db->where(array('Client_code' => $code,'Address_name' => 'Mailing Address'));
         $this->db->update('tbl_client_contact_info',$address);

        
     }
    
     function contactdetails($id)
     {
        $this->load->database();
        $sql="select tbl_client_details.*, tbl_client_contact_info.*,tbl_client_info.*
             from tbl_client_details JOIN tbl_client_contact_info ON
              tbl_client_details.Client_code=tbl_client_contact_info.Client_code  
              JOIN tbl_client_info ON
              tbl_client_info.Client_code=tbl_client_contact_info.Client_code           
             where tbl_client_contact_info.Address_name='Mailing Address' and 
             tbl_client_contact_info.ContactId=".$id." group by tbl_client_contact_info.ContactId";
       $query=$this->db->query($sql);
       return $query->result();
     }
    
    function addnewcontact($info,$contact,$clientDetail,$code)
     { 
        $contact['Address_name'] = "Mailing Address";
        $this->db->insert('tbl_client_info', $info);
        $this->db->insert('tbl_client_contact_info', $contact);
        $this->db->where(array('Client_code' => $code));
        $this->db->update('tbl_contact_details',$clientDetail);
     }
   
   function updateClientcontact($client_id,$id,$contact_id,$info,$contact)
   {
         $this->load->database();
     
         
          $this->db->where(array('Client_code' => $id,'Id'=>$client_id));
          $this->db->update('tbl_client_info',$info);
        
         $this->db->where(array('Client_code' => $id,'Address_name' => 'Mailing Address','ContactId'=>$contact_id));
         $this->db->update('tbl_client_contact_info',$contact);
   }
   function deleteClient($contactId,$Id)
   {
        $this->load->database();
        $this->db->where('ContactId', $contactId);
        $this->db->delete('tbl_client_contact_info');
        
       
        
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
   
   function InsertLocation($data,$contact)
   {
        $this->load->database();
        $this->db->insert('tbl_sub_client_details',$data);
        $contact['Address_name'] = "Mailing Address";
        $this->db->insert('tbl_client_contact_info',$contact);
   }
   function getcontact($id)
   {
        $this->load->database();
        $sql="select tbl_client_contact_info.* , tbl_client_info.* from 
             tbl_client_contact_info Join tbl_client_info on 
             tbl_client_info.Client_code=tbl_client_contact_info.Client_code 
             where tbl_client_contact_info.Client_code='".$id."' and 
             tbl_client_contact_info.Address_name='Mailing Address' group by 
             tbl_client_contact_info.ContactId";
        $query=$this->db->query($sql);
      
        return $query->result();
   }
   function getlocation($id)
   {
        $this->load->database();
        $sql="select * from tbl_sub_client_details where Client_code='".$id."'";
        $query=$this->db->query($sql);
        return $query->result();
   }
   function locationedit($id)
   {
       $this->load->database();
       $sql="select tbl_sub_client_details.*, tbl_client_contact_info.*
            from tbl_sub_client_details Join tbl_client_contact_info on 
            tbl_sub_client_details.Sub_client=tbl_client_contact_info.Client_code
            where tbl_sub_client_details.Sub_client='".$id."'";
       $query=$this->db->query($sql);
       return $query->result();
   }
   function UpdateLocation($id,$data,$contact)
   {
         $this->load->database();
         $this->db->where('Sub_client',$id);
         $this->db->update('tbl_sub_client_details',$data);
         $this->db->where('Client_code',$id);
         $this->db->update('tbl_client_contact_info',$contact);
         
   }
     
}
?>
     