<?php

class EmployeeController extends CI_Controller{
    
    public $activeMenu = 'employees';
    
    function EmployeeController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
     
   function employee($id)
    {
       $this->load->database();
        $this->load->model('EmployeeModel');
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'employee';
        $data['innerTabsActive'] = 'employee';
        $data['Eid']=$id;
		  $data['single_student'] = $this->EmployeeModel->updateall($id);
		   $data['single_student1'] = $this->EmployeeModel->updateall2($id);
        $this->load->view('employees/Employee',$data);
      


    }
    
    function employeeall()
    {
      
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerTabsActive'] = '';
        $data['innerMenuActive'] = 'employeeall';
         $this->load->model('EmployeeModel');
		 $data['single_student2'] = $this->EmployeeModel->viewall();
        $this->load->view('employees/employeeall',$data);
     
    }
    
    function system1()
    {
      
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerTabsActive'] = 'system';
        $data['innerMenuActive'] = '';
        $this->load->view('employees/EmployeeSystem',$data);

    }
     function employeecreate()
    {
      
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerTabsActive'] = 'employeecreate';
        $data['innerMenuActive'] = '';
         $this->load->database();
        $this->load->model('EmployeeModel');
          $data['query']=$this->EmployeeModel->allrecord();
        $this->load->view('employees/EmployeeNew',$data);

    }
       
	//////////Perfect working method   
	   
   function insert()
   {
        $this->load->model('mainModel');
       $this->load->helper('url');
       
        
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
      
        $this->load->database();
        $this->load->model('EmployeeModel');
        $EId=random_string('alnum',3);
        $a = $this->input->post('firstname');
        $b = $this->input->post('midname');
        $c = $this->input->post('lastname');
        $d = $this->input->post('loginname');
        $e = $this->input->post('password');
        $f = $this->input->post('email');
        
       
        $sql= "insert into tbl_employee_details
        (Firstname,Middlename,Lastname,ActiveStatus,Emp_Id,Password,LastModified,LoginName) 
        values('".$a."','".$b."','".$c."','0','".$EId."','".$e."',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'),'".$d."')";
    

        $this->db->query($sql);
        $id=$this->db->insert_id();
 
        $sql1="insert into tbl_user 
        (Username,Full_name,Password,Status,Email,CreationDate,DateModified,RId) 
        values('".$d."','".$a." ".$b." ".$c."','".$e."','0','".$f."',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'),DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'),'010')";
        $this->db->query($sql1);
		
		 $sql2= "insert into tbl_employee_info
        (LegalName,Email,Emp_Id,EmergencyContactName,EmergencyContactNo,Spouse,EmailSignature,LastModified,Mobile_no,Phone) 
        values('','','".$EId."','','','','',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'),'','')";
        $this->db->query($sql2);
		
		$sql3="insert into tbl_contact_info 
        (Main_Id,Phone_no,Fax_no,Email_address) 
        values('".$EId."','','','')";
        $this->db->query($sql3);
		
		
		
		$sql4="insert into tbl_address_all 
        (Main_Id,Address_name,Address1,Address2,City,State,Country,Postal_code,Last_modified) 
        values('".$EId."','Mailing Address','','','','','','',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'))";
        $this->db->query($sql4);
        
      
         
        $sql5="insert into tbl_address_all 
        (Main_Id,Address_name,Address1,Address2,City,State,Country,Postal_code,Last_modified) 
        values('".$EId."','Residential Address','','','','','','',DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'))";
        $this->db->query($sql5);
        
        echo "<script>alert('Added');</script>";
       
        
        redirect('EmployeeController/employeecreate', 'refresh'); 
       
        }
  
  //////////Perfect working method   
  
  
  
  
  
  /////////working here now
         function insertallinfo()
        {
         $this->load->model('mainModel');
         $this->load->helper('url');
         
        
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
      
        $this->load->database();
        //$this->load->model('EmployeeModel');
        $emp_id=$this->input->post('Empid');
        $a = $this->input->post('legalname');
        $b = $this->input->post('paddress1');
        $c = $this->input->post('paddress2');
        $d = $this->input->post('pcity');
        $e = $this->input->post('pstate');
        $w = $this->input->post('pcountry');
        $f = $this->input->post('pzip');
        $g = $this->input->post('pphn');
        $h = $this->input->post('pmobile');
        $i = $this->input->post('pemail');
        $j = $this->input->post('emgcontactname');
        $k = $this->input->post('Emgcontactno');
        $l = $this->input->post('spouse');
        $m = $this->input->post('emailsign');
        $n = $this->input->post('nphn');
        $o = $this->input->post('mfax');
        $p = $this->input->post('maddress1');
        $q = $this->input->post('maddress2');
        $r = $this->input->post('mcity');
        $s = $this->input->post('mstate');
        $t = $this->input->post('zipcode');
        $u = $this->input->post('memail');
       $v = $this->input->post('ncountry');
      $sql= "update tbl_employee_info set 
        LegalName='".$a."',Email='".$i."',EmergencyContactName='".$j."',EmergencyContactNo='".$k."',Spouse='".$l."',
		EmailSignature='".$m."',LastModified=DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s'),Mobile_no='".$h."',Phone='".$g."' where Emp_Id='".$emp_id."'" ;
        $this->db->query($sql);
        //$id=$this->db->insert_id();
 
 
        $sql1="update tbl_contact_info set Phone_no='".$n."',Fax_no='".$o."',Email_address='".$u."' where Main_Id='".$emp_id."'";
        $this->db->query($sql1);
        
      
       
        $sql2="update tbl_address_all set Address1='".$p."',Address2='".$q."',City='".$r."',State='".$s."'
		,Country='".$v."',Postal_code='".$t."',Last_modified=DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s') where Main_Id='".$emp_id."' and Address_name='Mailing Address'";
        $this->db->query($sql2);
        
      
         
        $sql3="update tbl_address_all set
      Address1='".$b."',Address2='".$c."',City='".$d."',State='".$e."',
		Country='".$w."',Postal_code='".$f."',Last_modified=DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s') where  Main_Id='".$emp_id."' 
		and  Address_name='Residential Address'";
        $this->db->query($sql3);
        
     
        
        echo "<script>alert('Added');</script>";
       
        
        redirect('EmployeeController/employee/'.$emp_id.'', 'refresh'); 
        // $this->load->view('RegAllView',$data);
      
    } 
              
           
           
          
   
}
?>