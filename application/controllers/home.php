<?php
require_once(APPPATH . 'handlers/Jobs_list_handler.php');
require_once(APPPATH . 'handlers/Jobs_applications_handler.php');
class Home extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function index(){
//        $responseArray = userLoginCheck();
        $data['page_title'] = "Home Page";
        
         
        $this->jobslisthandler = new Jobs_list_handler();  
        
        $jobs_list_data   =   $this->jobslisthandler->getJobsList();
         
        
         $jobs    =   '';
        foreach($jobs_list_data as $job){
//            print_r($job); exit;
            $jobs    .=  $this->load->view("home/templates/_lines_job",array('data' => $job),TRUE);       
        }
        
        $data['jobs_list']    =   $jobs;
        $data['content']    =   "Home/index";
        $template    =   "layouts/Home/home_template";
        $this->load->view($template,$data);       
        
    }
    
}



