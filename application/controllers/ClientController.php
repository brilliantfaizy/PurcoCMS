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
    
    
    
}


?>