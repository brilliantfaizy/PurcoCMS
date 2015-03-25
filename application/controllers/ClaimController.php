<?php


class ClaimController extends CI_Controller{
    
    public $activeMenu = 'ClaimController';
    
    function ClaimController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function newclaim()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerTabsActive'] = 'newclaim';
        $data['innerMenuActive'] = '';
        $this->load->view('claims/NewClaim',$data);
    }
    function searchallclaim()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerTabsActive'] = '';
        $data['innerMenuActive'] = 'searchallclaim';
        $this->load->view('claims/SearchClaim',$data);
    }
      function promissory()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'promissory';
        $data['innerTabsActive'] = '';
        $this->load->view('claims/PromissoryClaim',$data);
    }
      function advsearch()
    {
         $data['base'] = $this->config->item('base_url');
         $data['css'] = $this->config->item('css');
         $data['innerMenuActive'] = 'advsearch';
         $data['innerTabsActive'] = '';
         $this->load->view('claims/AdvanceSearchClaim',$data);
    }
    function myclaimfolder()
    {
         $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'myclaimfolder';
         $data['innerTabsActive'] = '';
         $this->load->view('claims/MyFolderClaim',$data);
    }
    function overview()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'overview';
        $data['innerTabsActive'] = 'overview';
        $this->load->view('claims/ClaimOverviewView',$data);
    }
    function journal()
    {
         $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'journal';
        $data['innerTabsActive'] = 'overview';
         $this->load->view('claims/ClaimJournalView',$data);
    }
     function history()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'history';
        $data['innerTabsActive'] = 'overview';
        $this->load->view('claims/ClaimHistoryView',$data);
    }
    
     function letter()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'letter';
        $data['innerTabsActive'] = 'overview';
        $this->load->view('claims/ClaimLetterView',$data);
    }
    function amount()
    {
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'amount';
        $data['innerTabsActive'] = 'overview';
        $this->load->view('claims/ClaimAmountView',$data);
    }
    
     function involved()
    {
         $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'involved';
        $data['innerTabsActive'] = 'overview';
         $this->load->view('claims/ClaimInvolvedView',$data);
    }
        
           function salvage()
    {
         $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['innerMenuActive'] = 'salvage';
        $data['innerTabsActive'] = 'overview';
         $this->load->view('claims/ClaimSalvageView',$data);
    }
        
}
?>