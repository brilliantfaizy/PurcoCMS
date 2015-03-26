<?php


class RoleController extends CI_Controller{
     public $activeMenu = 'RegController';
    function RoleController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
    }
    
    function getall2() {
        
        $this->load->model('mainModel');
        $this->load->helper('url');
         
        
        $query['base'] = $this->config->item('base_url');
        $query['css'] = $this->config->item('css');
          $query['innerMenuActive'] = 'getall2';
        $this->load->database();
        $this->load->model('RoleModel');
  
        $q=$this->db->get('tbl_roles');
        $query['query']= $q->result();
        $this->load->view('managerole',$query);
        
       
       
     
  }
  function viewupdaterole()
  {
     	$this->load->model('mainModel');
        $this->load->helper('url');
         
       $id = $this->uri->segment(3);
       $RId = $this->uri->segment(4);
       
        $query['base'] = $this->config->item('base_url');
        $query['css'] = $this->config->item('css');
 	 $query['innerMenuActive'] = 'permsrole';
	  $this->load->model('RoleModel');
	 $query['role'] = $this->RoleModel->getRole(); 
	  $query['page'] = $this->RoleModel->getpage();
	  $query['data']=$this->RoleModel->allviewrole($id,$RId);
      $query['single_student'] = $this->RoleModel->allview();
 	$this->load->view('EditPermissionToRole',$query);
    
  }
  public function role_table()
    {
        $this->load->model('RoleModel');
         //set selected country id from POST
        $id = $this->input->post('id',TRUE);
        $RId = $this->input->post('RId',TRUE);

        //run the query for the cities we specified earlier
        $districtData['districtDrop']=$this->RoleModel->viewtablewith_page($id,$RId);
          
        //$districtData['output'] = 
        print_r(json_encode($districtData['districtDrop']->result()));


    }
  
  function editpermrole()
  {
    $this->load->database();
	   $this->load->model('RoleModel');
        $this->load->library('form_validation');
        $id=$this->input->post('id');
   
    
        
		 $data = array(
    
     'ContentView' => $this->input->post('view'),
     'ContentAdd' => $this->input->post('create'),
     'ContentUpdate' => $this->input->post('edit'),
     'ContentDelete' => $this->input->post('delete'),
     'StartDate' => $this->input->post('start'),
     'EndDate' => $this->input->post('end')
    );

    $this->RoleModel->updaterole($id,$data);
    echo "<script> alert('Updated');</script>";
   	$this->permsrole();
     //redirect('RoleController/viewupdaterole/'.$id.'', 'refresh'); 
    
  }
  
 function permsrole()
 {
 	$this->load->model('mainModel');
        $this->load->helper('url');
         
        
        $query['base'] = $this->config->item('base_url');
        $query['css'] = $this->config->item('css');
 	 $query['innerMenuActive'] = 'permsrole';
	  $this->load->model('RoleModel');
	 $query['role'] = $this->RoleModel->getRole(); 
	  $query['page'] = $this->RoleModel->getpage();
	  $query['data']=$this->RoleModel->allview();
 	$this->load->view('PermissionsToRole',$query);
 }
 
////////////////////////////////////////////////////////////

 function insertperm()
 	{
	  $this->load->database();
	   $this->load->model('RoleModel');
        $this->load->library('form_validation');
    $this->form_validation->set_rules('role', 'Role', 'required|int');
    $this->form_validation->set_rules('page', 'Page', 'required');
    $this->form_validation->set_rules('start', 'Start Date', 'required');
      $this->form_validation->set_rules('end', 'End Date', 'required');
    //$this->form_validation->set_rules('privileges', 'Privileges', 'required');
    
    
     if ($this->form_validation->run() == FALSE)
    {
       $this->permsrole();
    }
    else
    {
        $sub=$this->input->post('submenu');
        $role=$this->input->post('role');
        $page=$this->input->post('page');
        $sql="select * from tbl_action_perm where RId=$role and Page_Id=$page and sub_page_Id=$sub";
       $query2=$this->db->query($sql);
        if($query2->num_rows > 0)
        { 
    
            echo "<script>alert('You are already asign page and menu to this role');</script>";
          //  $this->getall2(); 
          $this->permsrole();    
        }
         
        else{
		 $data = array(
     'RId' => $this->input->post('role'),
     'Page_Id' => $this->input->post('page'),
     'sub_page_Id' => $this->input->post('submenu'),
     'ContentView' => $this->input->post('view'),
     'ContentAdd' => $this->input->post('create'),
     'ContentUpdate' => $this->input->post('edit'),
     'ContentDelete' => $this->input->post('delete'),
     'StartDate' => $this->input->post('start'),
     'EndDate' => $this->input->post('end')
    );

  $this->db->insert('tbl_action_perm',$data);
  $this->permsrole();
 	}
    }
    }
function insertview()
{
    $this->load->view('RoleInsertView'); 
}




function insert() {
    
   
    
    
    $this->load->database();
    $this->load->model('RoleModel');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('roleid', 'Role Id', 'required|int');
    $this->form_validation->set_rules('roletitle', 'Role Title', 'required|min_length[5]|max_length[25]');
    $this->form_validation->set_rules('roledec', 'Role Description', 'required|min_length[5]');
    //$this->form_validation->set_rules('privileges', 'Privileges', 'required');
    
    
    if ($this->form_validation->run() == FALSE)
    {
      echo '<script>alert("Fill the data properly");</script>';
      $this->getall2();
    }
    else
    {
        $this->db->where('RoleTitle ', $this->input->post('roletitle'));
        $query1 = $this->db->get('tbl_roles');
        $this->db->where('RId ', $this->input->post('roleid'));
        $query = $this->db->get('tbl_roles');
        if($query->num_rows > 0 )
        { 
    
            echo "<script>alert('This Role Id already exists');</script>";
            $this->getall2();     
        }
         elseif($query1->num_rows > 0 )
        { 
    
            echo "<script>alert('This Role already exists');</script>";
            $this->getall2();     
        }
        else{
    //$this->load->library('form_validation');
     $data = array(
     'RId' => $this->input->post('roleid'),
     'RoleTitle' => $this->input->post('roletitle'),
     'Description' => $this->input->post('roledec')
    );

  $this->db->insert('tbl_roles',$data);
  //$this->load->view('myInsert');
  //return $this->db->insert_id();
  $this->getall2();
 }
  }
}
 
 
 function viewupdate(){
        $this->load->model('mainModel');
        $this->load->helper('url');
         
    
    $data['base'] = $this->config->item('base_url');
    $data['css'] = $this->config->item('css');
     $data['innerMenuActive'] = 'getall2';
    $id = $this->uri->segment(3);
    $this->load->model('RoleModel');

    $data['base'] = $this->config->item('base_url');
    $data['students']=$this->RoleModel->getall1();
    $data['single_student'] = $this->RoleModel->viewupdate($id);
    //print_r($this->RoleModel->viewupdate($id));
    $this->load->view('RoleUpdateView', $data);
   
    
 }

function viewupdate1(){
    $id = $this->uri->segment(3);
    $this->load->model('RoleModel');

    $data['base'] = $this->config->item('base_url');
    $data['students']=$this->RoleModel->getall1();
    $data['single_student'] = $this->RoleModel->viewupdate($id);
    $this->load->view('RoleDeleteView', $data);
    
 }
function update() {
   
        
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('RoleModel');
    $id= $this->input->post('id');
     $this->load->library('form_validation');

$this->form_validation->set_rules('roletitle', 'Role Title', 'required|min_length[2]|max_length[15]');
$this->form_validation->set_rules('roledec', 'Role Description', 'required|min_length[5]');
if ($this->form_validation->run() == FALSE)
{
    echo '<script>alert("Fill the data properly");</script>';
   $this->load->view('RoleUpdateView');
  
}
else
{
    $data = array(
    'RoleTitle' => $this->input->post('roletitle'),
   'Description' => $this->input->post('roledec')
   

    );
    $this->RoleModel->update($id,$data);
    echo "<script> alert('Updated');</script>";
    $this->viewupdate();
 
}

redirect('RoleController/getall2');
}
 
function delete(){
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('RoleModel');
    $id = $this->uri->segment(3);
    $this->RoleModel->delete($id);
    //$this->viewupdate1();
    redirect('RoleController/getall2');

}



}
?>