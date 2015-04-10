<?php

class OrganizationTypeModel extends CI_Model{
    
     function OrganizationTypeModel()
     {
        parent::__construct();
     }
     
      function AddOrganizationType($data)
     {
        $this->load->database();   
        $this->db->insert('tbl_organization_type', $data);
        
     }
     
     function getOrganizationType()
     {
         $this->load->database();
        $sql="Select * from tbl_organization_type";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function editOrganizationType($id)
     {
        $this->load->database();
        $sql="select * from tbl_organization_type where Id=".$id."";
        $query=$this->db->query($sql);
        return $query->result();
     }
     function updateOrganizationType($id,$data)
     {
        
        $this->load->database();
        $this->db->where('Id',$id);
         $this->db->update('tbl_organization_type',$data);
     }
     function deleteOrganizationType($id)
     {
         $this->load->database();
        $this->db->where('Id', $id);
        $this->db->delete('tbl_organization_type');
     }
}
?>