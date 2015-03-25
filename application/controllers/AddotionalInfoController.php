
<?php


class AddotionalInfoController extends CI_Controller{
    
    public $activeMenu = 'AddotionalInfoController';
    function AddotionalInfoController()
    {
        parent::__construct();
        $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    
    
  
      
     function additionalinfo()
    {    
         
         $data['base'] = $this->config->item('base_url');
         $data['css'] = $this->config->item('css');
         $this->load->view('Automobile/AdditionalinfoView',$data);
    }
  
}
?>