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
   
    function client()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'client';
        $data['innerTabsActive'] = '';
        $data['ClientCode']=random_string('alnum',4);
        $this->load->view('Client', $data);
        
    }
    function clientall()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientall';
         $data['innerTabsActive'] = '';
        $this->load->view('ClientAll', $data);
        
        
        
    }
    function clientsearch()
    {
        
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'clientsearch';
         $data['innerTabsActive'] = '';
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
        $data['base']            = $this->config->item('base_url');
        $data['css']             = $this->config->item('css');
        $data['innerMenuActive'] = 'client';
        $data['innerTabsActive'] = '';
        $this->load->database();
        $this->load->model('ClientModel');
        
        
        $details = array(
             'Cient_code'               => $this->input->post('client_code'),
             'Client_name'              => $this->input->post('clientname'),
             'Client_website'           => $this->input->post('website'),
             'Client_type'              => $this->input->post('type'),
             'Client_priority'          => $this->input->post('clientpriority'),
             'Client_fleet_size'        => $this->input->post('fleetsize'),
             'Client_employee_contact'  => $this->input->post('emp_contact'),
             'Client_status'            => $this->input->post('status'),
             'LastModifiedDate'         => DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s')
        );

        $info = array(
             'Title'            => $this->input->post('title'),
             'FirstName'        => $this->input->post('firstname'),
             'LastName'         => $this->input->post('lastname'),
             'Phone_No'         => $this->input->post('pphone'),
             'Fax_No'           => $this->input->post('pfaxno'),
             'Mobile_no'        => $this->input->post('pmobileno'),
             'LastModifiedDate' => DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s')
        );  
        $contact = array(
            'Phone_no'         => $this->input->post('mdayphone'),
            'Fax_no'           => $this->input->post('mfaxno'),
            'Email_address'    => $this->input->post('pemail'),
            'Mobile'           => $this->input->post('mmobileno')
         );  
        $address1 = array(
            'Address1'       => $this->input->post('maddress1'),
            'Address2'       => $this->input->post('maddress2'),
            'City'           => $this->input->post('mcity'),
            'State'          => $this->input->post('mstate'),
            //'Country'        => $this->input->post('city'),
            'Postal_code'    => $this->input->post('mzip'),
            'Last_modified'  => DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s')
          
         );  
        $address2 = array(
            'Address1'       => $this->input->post('paddress1'),
            'Address2'       => $this->input->post('paddress2'),
            'City'           => $this->input->post('pcity'),
            'State'          => $this->input->post('pstate'),
            //'Country'        => $this->input->post('city'),
            'Postal_code'    => $this->input->post('pzip'),
            'Last_modified'  => DATE_FORMAT(NOW(),'%Y-%m-%d %h:%i:%s')
        );    

        $this->my_model->insert_entry($details,$info,$contact,$address1,$address2);

   
}
    
    
    
}


?>