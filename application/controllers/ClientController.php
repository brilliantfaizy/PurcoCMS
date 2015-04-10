<?php


class ClientController extends CI_Controller
{
    
    public $activeMenu = "client";
    
    function ClientController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
    }
   
    function editClientview()
    {
      
        $data['base']            = $this->config->item('base_url');
       
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'client';
        $data['innerTabsActive'] = '';
        $id = $this->uri->segment(3);
        $cid=$this->uri->segment(4);
        $client=$this->uri->segment(5);
        $cntct=$this->input->post('contactid');
        $this->load->model('ClientModel');
        $data['state']=$this->ClientModel->getstates();
        $data['ctype']=$this->ClientModel->getclienttype();
        $data['query']=$this->ClientModel->editClient($id,$cid,$client);
        $data['contact']=$this->ClientModel->getcontactname($id);
        $data['cntctDetails']=$this->ClientModel->contactdetails($cid);
        $this->load->view('ClientEdit', $data);
      //  $this->load->view('fileupload', $data);
        
    }
    function client()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'client';
        $data['innerTabsActive'] = '';
        $data['ClientCode']=random_string('alnum',4);
        $this->load->model('ClientModel');
        $data['query']=$this->ClientModel->getstates();
        $data['employee']=$this->ClientModel->getemployee();
        $data['ctype']=$this->ClientModel->getclienttype();
        $this->load->view('Client', $data);
        
    }
    function clientall()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientall';
         $data['innerTabsActive'] = '';
         $this->load->model('ClientModel');
        $data['query']=$this->ClientModel->getstates();
        $data['employee']=$this->ClientModel->getemployee();
        $this->load->view('ClientAll', $data);     
    }
    function clientsearch()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientsearch';
        $data['innerTabsActive'] = '';
        $this->load->model('ClientModel');
        $data['query']=$this->ClientModel->getstates();
        $data['employee']=$this->ClientModel->getemployee();
        $data['ctype']=$this->ClientModel->getclienttype();
        $this->load->view('ClientSearch', $data);
        
        
        
    }
    function clientactive()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientactive';
        $data['innerTabsActive'] = '';
        $this->load->view('ClientActive', $data);
        
        
        
    }
     function clientlead()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientlead';
        $data['innerTabsActive'] = '';
        $this->load->view('ClientLead', $data);
        
        
        
    }
    
    function clientinactive()
    {
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientinactive';
        $data['innerTabsActive'] = '';
        $this->load->view('ClientInactive', $data);    
    }
    function clientinfile()
    {
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientinfile';
        $data['innerTabsActive'] = '';
        $this->load->view('AddFile', $data);
    }
    
    function clientjournal()
    {
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerTabsActive'] = 'clientjournal';
        $data['innerMenuActive'] = '';
        $this->load->view('ClientJournal', $data);
    }
    
    function clienttype()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerTabsActive'] = 'clienttype';
        $data['innerMenuActive'] = '';
        $this->load->view('ClientType', $data);
         
        
    }
    
    public function insert()
    {    
        $msg=array();
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'client';
        $data['innerTabsActive'] = '';
        $this->load->database();
        $this->load->model('ClientModel');
         $date = date("Y-m-d h:i:s");
        //$date=DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s');
        $details = array(
             'Client_code'              => $this->input->post('client_code'),
             'Client_name'              => $this->input->post('clientname'),
             'Client_website'           => $this->input->post('website'),
             'Client_type'              => $this->input->post('type1'),
             'Client_priority'          => $this->input->post('clientpriority'),
             'Client_fleet_size'        => $this->input->post('fleetsize'),
             'Client_employee_contact'  => $this->input->post('emp_contact'),
             'Client_status'            => $this->input->post('status'),
             'LastModifiedDate'         => $date
        );

        $info = array(
             'Client_code'      => $this->input->post('client_code'),
             'Title'            => $this->input->post('title'),
             'FirstName'        => $this->input->post('firstname'),
             'LastName'         => $this->input->post('lastname'),
             'Phone_No'         => $this->input->post('pphone'),
             'Fax_No'           => $this->input->post('pfaxno'),
             'Mobile_no'        => $this->input->post('pmobileno'),
             'LastModifiedDate' => $date
        );  
        $contact = array(
            'Main_Id'          => $this->input->post('client_code'),
            'Phone_no'         => $this->input->post('mdayphone'),
            'Fax_no'           => $this->input->post('mfaxno'),
            'Email_address'    => $this->input->post('pemail'),
            'Mobile'           => $this->input->post('mmobileno')
         );  
        $address1 = array(
            'Main_Id'      => $this->input->post('client_code'),
            'Address1'       => $this->input->post('maddress1'),
            'Address2'       => $this->input->post('maddress2'),
            'City'           => $this->input->post('mcity'),
            'State'          => $this->input->post('mstate'),
            'Postal_code'    => $this->input->post('mzip'),
            'Last_modified'  => $date
          
         );  
        $address2 = array(
            'Main_Id'      => $this->input->post('client_code'),
            'Address1'       => $this->input->post('paddress1'),
            'Address2'       => $this->input->post('paddress2'),
            'City'           => $this->input->post('pcity'),
            'State'          => $this->input->post('pstate'),
            'Postal_code'    => $this->input->post('pzip'),
            'Last_modified'  =>$date
        );    

        $this->ClientModel->insert_users($details,$info,$contact,$address1,$address2);
        $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
   
    }

    function insertclienttype()
    {
        
        $msg=array();
        $this->load->model('ClientModel');
         $date = date("Y-m-d h:i:s");
      
        $data = array(
             'Key'               => $this->input->post('key1'),
             'Description'       => $this->input->post('description'),
             'LastModified'      => $date
             
        );
         $this->ClientModel->insert_client_type($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    function getClientType()
    {
        $this->load->model('ClientModel');
        $data= $this->ClientModel->getType();
        echo json_encode($data);
          
    }
    function getClientAll()
    {
        $this->load->model('ClientModel');
        $data=$this->ClientModel->getAllClient();
        echo json_encode($data);
        
    }
    function delete()
    {
       
        $this->load->model('ClientModel');
        $id = $this->uri->segment(3);
        $this->ClientModel->ClientTypeDelete($id);
        $this->clienttype();        
    }
    
    function getClientAllSorted()
    {
        $this->load->model('ClientModel');
        $data=array(
        'Client_name'=>$this->input->post('clientname'),
        'Client_code'=>$this->input->post('clientcode'),
        'City'=>$this->input->post('city'),
        'State'=>$this->input->post('state'),
        'Client_status'=>$this->input->post('status'),
        'Client_priority'=>$this->input->post('priority'),
        'Client_employee_contact'=>$this->input->post('contact')
        );
        //print_r($data);
        $data=$this->ClientModel->getClientAllSorted($data);
        echo json_encode($data);
        
        //echo $this->input->post('clientcode');
    }
    function getClientAllSearch()
    {
        $this->load->model('ClientModel');
        $data=array(
        'Client_name'=>$this->input->post('clientname'),
        'Client_code'=>$this->input->post('clientcode'),
        'Client_type'=>$this->input->post('clienttype'),
        'Client_priority'=>$this->input->post('clientpriority'),
        'Client_fleet_size'=>$this->input->post('fleetsize'),
        'FirstName'=>$this->input->post('firstname'),
        'LastName'=>$this->input->post('lastname'),
        'Client_status'=>$this->input->post('clientstatus'),
        'Address1'=>$this->input->post('streetaddress'),
        'City'=>$this->input->post('city'),
        'Postal_code'=>$this->input->post('zip'),
        'State'=>$this->input->post('state'),
        'Fax_No'=>$this->input->post('faxno')
        );
        
         $data=$this->ClientModel->getClientAllSearch($data);
        //print_r($data);
        echo json_encode($data);
    }
    
    function getclientActive()
    {
        $this->load->model('ClientModel');
        $data=$this->ClientModel->getclientActive();
        echo json_encode($data);
        
    }
    function getclientLead()
    {
         $this->load->model('ClientModel');
        $data=$this->ClientModel->getclientLead();
        echo json_encode($data);
    }
     function getclientInactive()
    {
        $this->load->model('ClientModel');
        $data=$this->ClientModel->getclientInactive();
        echo json_encode($data);
        
    }
    
    
    public function upload() {
		if (!empty($_FILES)) {
		$tempFile = $_FILES['file']['tmp_name'];
		$fileName = $_FILES['file']['name'];
		$targetPath = getcwd() . '/uploads/';
		$targetFile = $targetPath . $fileName ;
		move_uploaded_file($tempFile, $targetFile);
		// if you want to save in db,where here
		// with out model just for example
		// $this->load->database(); // load database
		// $this->db->insert('file_table',array('file_name' => $fileName));
		}
    }
    
    function editClient() 
    {
        $msg=array();
        $id=$this->input->post('code');
        $add_id=$this->input->post('add_Id');
        $contact_id=$this->input->post('Contact_id');
        $client_id=$this->input->post('client_id');
        $date = date("Y-m-d h:i:s");
        $contact=array(
        'Phone_no'     =>$this->input->post('phone'),
        'Fax_no'       =>$this->input->post('fax')
        );
        $address=array(
        'Address1'      =>$this->input->post('address1'),
        'Address2'      =>$this->input->post('address2'),
        'City'          =>$this->input->post('city'),
        'State'         =>$this->input->post('state'),
        'Postal_code'   =>$this->input->post('zip'),
        'Last_modified'  =>$date
        );
        $client=array(
        'LastModifiedDate'  =>$date
        );
        $this->load->model('ClientModel');
        $this->ClientModel->updateClient($id,$contact,$address,$client,$id);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    public function buildDropCities()
    {
        $data= array(); 
        $this->load->model('ClientModel');
        $cid=$this->input->post('id');
        $data['data']=$this->ClientModel->contactdetails($cid);
        echo json_encode($data);

    }
    
    public function addnewcontact()
    {    
        $msg=array();
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'client';
        $data['innerTabsActive'] = '';
        $this->load->database();
        $this->load->model('ClientModel');
         $date = date("Y-m-d h:i:s");
       
       $code=$this->input->post('code');

        $info = array(
             'Client_code'      => $code,
             'FirstName'        => $this->input->post('Cname'),
             'Phone_No'         => $this->input->post('dphn'),
             'Fax_No'           => $this->input->post('fax'),
             'Mobile_no'        => $this->input->post('mobile'),
             'LastModifiedDate' => $date
        );  
        $contact = array(
            'Main_Id'          => $code,
            'Phone_no'         => $this->input->post('dphn'),
            'Fax_no'           => $this->input->post('fax'),
            'Email_address'    => $this->input->post('email'),
            'Mobile'           => $this->input->post('mobile')
         );  
        $address1 = array(
            'Main_Id'        => $code,
            'Address1'       => $this->input->post('address1'),
            'Address2'       => $this->input->post('address2'),
            'City'           => $this->input->post('city'),
            'State'          => $this->input->post('state'),
            'Postal_code'    => $this->input->post('zip'),
            'Last_modified'  => $date
          
         );  
           
        $clientDetail= array(
            'LastModifiedDate' =>$date
        );
        $this->ClientModel->addnewcontact($info,$contact,$address1,$clientDetail,$code);
        $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
   
    }
    
    
    function addclientinfo()
    {
        $msg=array();
        $id=$this->input->post('code');
        $add_id=$this->input->post('add_Id');
        $contact_id=$this->input->post('Contact_id');
        $client_id=$this->input->post('client_id');
        $date = date("Y-m-d h:i:s");
          
        $info = array(
             'FirstName'        => $this->input->post('Cname'),
             'Phone_No'         => $this->input->post('dphn'),
             'Fax_No'           => $this->input->post('fax'),
             'Mobile_no'        => $this->input->post('mobile'),
             'LastModifiedDate' => $date
        );  
        $contact = array(
            'Phone_no'         => $this->input->post('dphn'),
            'Fax_no'           => $this->input->post('fax'),
            'Email_address'    => $this->input->post('email'),
            'Mobile'           => $this->input->post('mobile')
         );  
        $address=array(
        'Address1'      =>$this->input->post('address1'),
        'Address2'      =>$this->input->post('address2'),
        'City'          =>$this->input->post('city'),
        'State'         =>$this->input->post('state'),
        'Postal_code'   =>$this->input->post('zip'),
        'Last_modified'  => $date
        );
        $this->load->model('ClientModel');
        $this->ClientModel->updateClientcontact($client_id,$id,$contact_id,$add_id,$info,$contact,$address);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    function deleteClient()
    {
        
        $addId=$this->input->post('addId');
        $contactId=$this->input->post('contactId');
        $Id=$this->input->post('Id');
        $this->load->model('ClientModel');
        $this->ClientModel->deleteClient($contactId,$addId,$Id);
        // echo json_encode($data);
        
    }
    
    function addNotes()
    {
        $this->load->library('session');
        $this->load->model('mainModel');
         $msg=array();
        $editor=$this->mainModel->checkSession()[1];
        
        //$msg['editor']=$this->mainModel->checkSession()[1];
         $date = date("Y-m-d h:i:s");
         $addnote = array(
             'Client_code'                => $this->input->post('code'),
             'Notes_type_description'     => $this->input->post('notesdis'),
             'Notes_type_key'             => $this->input->post('dis'),
             'category'                   => $this->input->post('cat'),
             'LastModifiedDate'           => $date,
             'Editor'                     => $editor
            
        );  
        
        $this->load->model('ClientModel');
        $this->ClientModel->addNotes($addnote);
        $msg['msg']="Notes Added";
        echo json_encode($msg);
        
    }
    
    function getnotesAll()
    {
        $id=$this->input->post('code');
        $this->load->model('ClientModel');
        $data=$this->ClientModel->getnotesAll($id);
         
        echo json_encode($data);
        
    }
    
    function getresources()
    {
        $id=$this->input->post('code');
        $this->load->model('ClientModel');
        $data=$this->ClientModel->getresources($id);
         
        echo json_encode($data);
    }
    
    function editnotes()
    {
        $id=$this->input->post('id');
        $this->load->model('ClientModel');
        $data=$this->ClientModel->editnotes($id);
         echo json_encode($data);
    }
    
    function updatenotes()
    {
        $msg=array();
        $id=$this->input->post('noteId');
 
        $this->load->library('session');
        $this->load->model('mainModel');
        $msg=array();
        $editor=$this->mainModel->checkSession()[1];
        $date = date("Y-m-d h:i:s");
        $notesinfo = array(
             //'Client_code'                => $this->input->post('code'),
             'Notes_type_description'     => $this->input->post('notesdis'),
             'Notes_type_key'             => $this->input->post('dis'),
             'category'                   => $this->input->post('cat'),
             'LastModifiedDate'           => $date,
             'Editor'                     => $editor
            
        ); 
        
        $this->load->model('ClientModel');
        $data=$this->ClientModel->updatenotes($id,$notesinfo);
        print_r($data);
        $msg['msg']="Updated";
        echo json_encode($msg);
    }
    
    public function do_upload(){
     $config =  array(
                  'upload_path'     => "./uploads/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf|docx",
                  'overwrite'       => TRUE,
                  'max_size'        => "2048000",  
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );    
                
				$this->load->library('upload', $config);
                
                 if(is_array($_FILES)) {
                if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                    $sourcePath = $_FILES['userImage']['tmp_name'];
                    $targetPath = "./uploads/".$_FILES['userImage']['name'];
                    $filename=$_FILES['userImage']['name'];
                if(move_uploaded_file($sourcePath,$targetPath)) {
    echo '<img src="'.base_url().$targetPath .'" width="100px" height="100px" alt="'.$_POST['image_title'].'"/>';
            }
        }
    }
                  $date = date("Y-m-d h:i:s");
                  
                    $addjournal = array(
            
                        'Client_code'             => $this->input->post('code'),
                        'Note_type_description'   => $this->input->post('editor'),
                        'Note_type_key'           => $this->input->post('general'),
                        'LastModifiedDate'        => $date
                         ); 
                 
                          $file = array(
            
                        'filename'      => $filename,
                        'filepath'      => $targetPath,
                        'Client_code'   => $this->input->post('code')
                        ); 
                    
                    $this->load->model('ClientModel');
                    $data=$this->ClientModel->addJournalnote($addjournal,$file);
                    $msg['msg']="Added";
                    echo json_encode($msg);
           
}



public function addclientResources(){           
                if(is_array($_FILES)) {
                if(is_uploaded_file($_FILES['Rfile']['tmp_name'])) {
                    $sourcePath = $_FILES['Rfile']['tmp_name'];
                    $targetPath = "./uploads/resources/".$_FILES['Rfile']['name'];
                    $filename=$_FILES['Rfile']['name'];
                if(move_uploaded_file($sourcePath,$targetPath)) {
    echo '<img src="'.base_url().$targetPath .'" width="100px" height="100px" alt="'.$_POST['image_title'].'"/>';
            }
        }
         $date = date("Y-m-d h:i:s");
                    $addresources = array(
            
                        'Type'           => $this->input->post('Rtype'),
                        'Client_code'    => $this->input->post('code'),
                        'Rname'          => $this->input->post('Rname'),
                        'File'           => $filename,
                        'Filepath'       => $targetPath,
                        'LastModified'   => $date
                         ); 
                    $this->load->model('ClientModel');
                    $this->ClientModel->addclientResource($addresources);
                    $msg['msg']="Added";
                    echo json_encode($msg);
    }
                
                //$file=$this->upload->do_upload("Rfile");
//                
//				if($file)
//				{
//				    $file_info = $this->upload->data();
//					$data1 = array('upload_data' =>$file_info);
//                   $filepath='../../../../../uploads/resources/'. $file_info['file_name'];
//                    $filename = $file_info['file_name'];
//                    
//                     $date = date("Y-m-d h:i:s");
//                    $addresources = array(
//            
//                        'Type'           => $this->input->post('Rtype'),
//                        'Client_code'    => $this->input->post('code'),
//                        'Rname'          => $this->input->post('Rname'),
//                        'File'           => $filename,
//                        'Filepath'       => $filepath,
//                        'LastModified'   => $date
//                         ); 
//                    $this->load->model('ClientModel');
//                    $this->ClientModel->addclientResource($addresources);
//                    $msg['msg']="Added";
//                    echo json_encode($msg);
//                    
//				}
//				else
//				{
//				$error = array('error' => $this->upload->display_errors());
//			//	$this->load->view('file_view', $error);
//				}    
}

        

 
   
}

?>