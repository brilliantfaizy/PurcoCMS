<?php


class PagesController extends CI_Controller{
     public $activeMenu = 'RegController';
    function PagesController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
    }
    
    function getallpage() {
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        if($this->mainModel->checkSession() != false && $this->mainModel->checkSession()[1] == "Admin"){ 
        
        $query['base'] = $this->config->item('base_url');
        $query['css'] = $this->config->item('css');
          $query['innerMenuActive'] = 'getallpage';
        $this->load->database();
        $this->load->model('PageModel');
  
        $q=$this->db->get('tbl_pages');
        $query['query']= $q->result();
       
        $this->load->view('managepages',$query);
        
       } else {
            
            
            redirect('main/login');
            
        }
       
     
  }
 


function insert() {
     $this->load->model('mainModel');
        $this->load->helper('url');
    $this->load->database();
    $this->load->model('PageModel');
    $this->load->library('form_validation');

$this->form_validation->set_rules('pagetitle', 'Page Title', 'required|min_length[2]|max_length[15]');
//$this->form_validation->set_rules('privileges', 'Privileges', 'required');

if ($this->form_validation->run() == FALSE)
{
    echo '<script>alert("Fill the data properly");</script>';
   //$this->load->view('RoleInsertView');
}
else
{
    //$this->load->library('form_validation');
    $data = array(
    'Page' => $this->input->post('pagetitle'),
    'Private'=>$this->input->post('status')
   
    );

  $this->db->insert('tbl_pages',$data);
  //$this->load->view('myInsert');
  //return $this->db->insert_id();
  $this->getallpage();
 
  }
}
 
 
 
 function viewupdate(){
        $this->load->model('mainModel');
        $this->load->helper('url');
       
    
    $data['base'] = $this->config->item('base_url');
    $data['css'] = $this->config->item('css');
     $data['innerMenuActive'] = 'getallpage';
    $id = $this->uri->segment(3);
    $this->load->model('PageModel');

    $data['base'] = $this->config->item('base_url');
    $data['students']=$this->PageModel->getall1();
    $data['single_student'] = $this->PageModel->viewupdate($id);
    //print_r($this->RoleModel->viewupdate($id));
    $this->load->view('PageUpdateView', $data);
    
    
 }


function update() {
   
         $this->load->model('mainModel');
        $this->load->helper('url');
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('PageModel');
    $id= $this->input->post('id');
     $this->load->library('form_validation');

$this->form_validation->set_rules('pagetitle', 'Page Title', 'required|min_length[2]|max_length[15]');
//$this->form_validation->set_rules('privileges', 'Privileges', 'required');

if ($this->form_validation->run() == FALSE)
{
    echo '<script>alert("Fill the data properly");</script>';
   //$this->load->view('RoleUpdateView');
  
}
else
{
    $data = array(
    'Page' => $this->input->post('pagetitle'),
    'Private'=>$this->input->post('status')
   

    );
    $this->PageModel->update($id,$data);
    echo "<script> alert('Updated');</script>";
    $this->viewupdate();
 
}

redirect('PagesController/getallpage');
}
 
function delete(){
     $this->load->model('mainModel');
       // $this->load->helper('url');
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('PageModel');
    $id = $this->uri->segment(3);
    $this->PageModel->delete($id);
    //$this->viewupdate1();
    redirect('PagesController/getallpage');

}
public function buildDropCities()
    {
        $this->load->model('PageModel');
         //set selected country id from POST
        $id_country = $this->input->post('id',TRUE);

        //run the query for the cities we specified earlier
        $districtData['districtDrop']=$this->PageModel->getCitiesByCountry($id_country);
          
        //$districtData['output'] = 
        print_r(json_encode($districtData['districtDrop']->result()));

//        foreach ($districtData['districtDrop']->result() as $row)
//        {
//            here we build a dropdown item line for each query result
//            $output .= "<option value='".$row->RId."'>".$row->RoleTitle."</option>";
//        }
//
//        echo  $output;
        //$this->load->view('PagesToPermission',$districtData);
    }
    
    
    public function SubMenusCon()
    {
         $this->load->model('mainModel');
        $this->load->helper('url');
         $this->load->model('PageModel');
         //set selected country id from POST
        //$id_country = $this->input->post('id',TRUE);

        //run the query for the cities we specified earlier
        
         $Data['submenus'] = $this->PageModel->SubMenus($this->input->post('id'));
         print_r(json_encode($Data['submenus']->result()));

    }
    
    
 function Getallrecord() {
        
        $this->load->model('mainModel');
        $this->load->helper('url');
        
        
        $query['base'] = $this->config->item('base_url');
        $query['css'] = $this->config->item('css');
          $query['innerMenuActive'] = 'Getallrecord';
        $this->load->database();
        $this->load->model('PageModel');
  
        //$query['query']=$this->PageModel->allrecord();
        /////////////////////////////////////////
         $query['page_list'] = $this->PageModel->getPage();
          $query['perm_list'] = $this->PageModel->getPerm();
        $this->load->view('PagesToPermission',$query);
        
       
       
     
  }
  
  function insertpages() {
     $this->load->model('mainModel');
        $this->load->helper('url');
    $this->load->database();
    $this->load->model('PageModel');
   
if ($this->input->post('pages')=='empty')
{
    echo '<script>alert("Select the page");</script>';
   //$this->load->view('RoleInsertView');
}
elseif($this->input->post('permissions')=='empty')
{
     echo '<script>alert("Select the permission");</script>';
}
else
{
    //$this->load->library('form_validation');
    $data = array(
    'Page_Id' => $this->input->post('pages'),
    'RId'=>$this->input->post('permissions')
   
    );

  $this->db->insert('tbl_permission_pages',$data);
  //$this->load->view('myInsert');
  //return $this->db->insert_id();
  $this->Getallrecord();
 
  }
}
function deletepage(){
     $this->load->model('mainModel');
        //$this->load->helper('url');
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('PageModel');
    $id = $this->uri->segment(3);
    $this->PageModel->deletepage($id);
    //$this->viewupdate1();
    redirect('PagesController/Getallrecord');

}

function viewupdatepage(){
        $this->load->model('mainModel');
        $this->load->helper('url');
         
    
    $data['base'] = $this->config->item('base_url');
    $data['css'] = $this->config->item('css');
     $data['innerMenuActive'] = 'Getallrecord';
    $id = $this->uri->segment(3);
    $this->load->model('PageModel');

    $data['base'] = $this->config->item('base_url');
    $data['students']=$this->PageModel->allrecord();
      $data['page_list'] = $this->PageModel->getPage();
          $data['perm_list'] = $this->PageModel->getPerm();
    $data['single_student'] = $this->PageModel->viewupdatepage($id);
    //print_r($this->RoleModel->viewupdate($id));
    $this->load->view('pagePermView', $data);
    
    
 }


function updatepage() {
   
         $this->load->model('mainModel');
        //$this->load->helper('url');
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('PageModel');
    $id= $this->input->post('id');
    if ($this->input->post('pages')=='empty')
{
    echo '<script>alert("Select the page");</script>';
   //$this->load->view('RoleInsertView');
}
elseif($this->input->post('permissions')=='empty')
{
     echo '<script>alert("Select the permission");</script>';
}
else
{
    //$this->load->library('form_validation');
    $data = array(
    'Page_Id' => $this->input->post('pages'),
    'RId'=>$this->input->post('permissions')
   
    );
    $this->PageModel->updatepage($id,$data);
    echo "<script> alert('Updated');</script>";
    $this->Getallrecord();
 
}

redirect('PagesController/Getallrecord');
}
}
?>