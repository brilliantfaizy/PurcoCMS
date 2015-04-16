<?php


class AutomobileController extends CI_Controller{
    
      public $activeMenu = 'AutomobileController';
    function AutomobileController()
    {
        parent::__construct();
         $this->load->model('mainModel');
        $this->load->helper('url');
        $this->mainModel->checkSession();
        
    }
    function make()
    {
       $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        // $this->load->model('AutomobileModel');
         // $data['make']=$this->AutomobileModel->getmakes();
         $this->load->view('Automobile/AutomobileMakeReport',$data);
    }
    function Insertmake()
    {
        $msg=array();
        $this->load->model('AutomobileModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
        $data = array(
             'Make'              => $this->input->post('make'),
             'LastModified'      => $date    
        );
         $this->AutomobileModel->Insertmake($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
    function getmake()
    {
        
         $this->load->model('AutomobileModel');
       $data=$this->AutomobileModel->getmakes();
        echo json_encode($data);
    }
    
    function InsertModel()
    {
        $msg=array();
        $this->load->model('AutomobileModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
        $data = array(
             'Model'            => $this->input->post('description'),
             'Id'               =>$this->input->post('select'),
             'LastModified'     => $date    
        );
         $this->AutomobileModel->InsertModel($data);
         $msg['msg']="Record Inserted Successfully";
         echo json_encode($msg);
    }
   
   function filltable()
   {
       
        $this->load->model('AutomobileModel');
        $cid=$this->input->post('id');
        $data=$this->AutomobileModel->fillmodel($cid);
        
        echo json_encode($data);
   }
   
   function DeleteModel()
   {
         $this->load->model('AutomobileModel');
        $cid=$this->input->post('id');
        $data=$this->AutomobileModel->DeleteModel($cid);
        
        echo json_encode($data);
   }
    function DeleteMake()
   {
         $this->load->model('AutomobileModel');
        $cid=$this->input->post('id');
        $data=$this->AutomobileModel->DeleteMake($cid);
        
        echo json_encode($data);
   }
   function editmake()
   {
      $this->load->model('AutomobileModel');
        $cid=$this->input->post('id');
        $data=$this->AutomobileModel->editmake($cid);
        
        echo json_encode($data);
   }
   
   function updatemake()
   {
        $msg=array();
        $id=$this->input->post('id');
        $this->load->model('AutomobileModel');
        $date =gmdate("Y-m-d h:i:s",time()+(5*3600));
        $data = array(
             'Make'            => $this->input->post('make'),
             'LastModified'     => $date    
        );
         $this->AutomobileModel->updatemake($id,$data);
         $msg['msg']="Record updated Successfully";
         echo json_encode($msg);
   }
   
}
?>