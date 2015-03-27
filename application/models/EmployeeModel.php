<?php

class EmployeeModel extends CI_Model{
    
     function EmployeeModel()
     {
        parent::__construct();
     }
      function getall()
     {
       
        $query=$this->db->get($table);
        return $query->result();
     }
     
      function insert($table)
    {
        $this->db->query($table);
      
    }
    
    function insertallinfo($table)
    {
        $this->db->query($table);
      
    }
      function allrecord()
     {
        $this->load->database();
      
                 $sql="SELECT tbl_employee_details.*, tbl_user.* FROM (tbl_employee_details INNER JOIN tbl_user 
                ON tbl_employee_details.LoginName= tbl_user.Username) ";
                $query=$this->db->query($sql);
                return $query->result();
     } 
	 
	 function updateall($data)
	 {
	 	$this->load->database();
			$sql="SELECT tbl_employee_info.*, tbl_address_all.*,tbl_contact_info.* FROM tbl_employee_info join tbl_address_all 
			ON tbl_employee_info.Emp_Id = tbl_address_all.Main_Id join tbl_contact_info ON 
			tbl_address_all.Main_Id = tbl_contact_info.Main_Id where tbl_employee_info.Emp_Id= '".$data."' and tbl_address_all.Address_name='Residential Address'";
                $query1=$this->db->query($sql);
                return $query1->result();
	 }
	 
	  function updateall2($data1)
	 {
	 	$this->load->database();
			$sql="SELECT tbl_employee_info.*, tbl_address_all.*,tbl_contact_info.* FROM tbl_employee_info join tbl_address_all 
			ON tbl_employee_info.Emp_Id = tbl_address_all.Main_Id join tbl_contact_info ON 
			tbl_address_all.Main_Id = tbl_contact_info.Main_Id where tbl_employee_info.Emp_Id= '".$data1."' and tbl_address_all.Address_name='Mailing Address'";
                $query1=$this->db->query($sql);
                return $query1->result();
	 }
        
		function viewall()
		{
			$this->load->database();
			$sql="SELECT tbl_user.* , tbl_employee_details.* from tbl_user
				INNER JOIN tbl_employee_details
				ON tbl_user.Username=tbl_employee_details.LoginName";
				 $query=$this->db->query($sql);
                return $query->result();
		}
        
        
		function edit_employee($id)
		{
			$this->load->database();
			$sql="SELECT  tbl_employee_details.* from tbl_employee_details
			where tbl_employee_details.Emp_Id='".$id."'";
				 $query=$this->db->query($sql);
                return $query->result();
		}
}
?>
     