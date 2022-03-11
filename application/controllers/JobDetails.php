<?php
require_once(APPPATH . 'handlers/Jobs_list_handler.php');
require_once(APPPATH . 'handlers/Jobs_applications_handler.php');
class JobDetails extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function index(){
//        $responseArray = userLoginCheck();
        $data['page_title'] = "Job Details Page";
        $id = $_GET['id'];
        $userid           = $this->session->userdata('userid');
        
        $this->jobslisthandler = new Jobs_list_handler(); 
        $this->jobsapplicationshandler = new Jobs_applications_handler(); 
        
        $jobs_list_data   =   $this->jobslisthandler->getJobsList($id);
        $job_applied_data   =   $this->jobsapplicationshandler->getJobAppliedData($id,$userid);
        
        $data['appliedtext'] = 'Apply Now';
        if(!empty($job_applied_data)){
            $data['appliedtext'] = '<i class="fa fa-check" aria-hidden="true"></i> Applied';
        }
        $data['role']           = $this->session->userdata('role');
        $data['userid']           = $userid;
        
        
        
        
        
        $data['job'] = $jobs_list_data[0]; 
         
        $data['content']    =   "Home/job_details";
        $template    =   "layouts/Home/home_template";
        $this->load->view($template,$data);       
        
    }
    
}



