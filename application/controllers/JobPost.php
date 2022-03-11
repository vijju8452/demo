<?php
class JobPost extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('session');
    }
    
    
     
    public function index(){
        $responseArray = userLoginCheck();
         
        $data['page_title'] = "Post Job";
        
        $data['content']    =   "Home/postjob";
        $template    =   "layouts/Home/login_template";
        $this->load->view($template,$data);  
        
//        $this->load->view('admin/login',$data);       
    }
    public function logout(){
        
        logout();
        redirect(getUrl('login'));
    }
}



