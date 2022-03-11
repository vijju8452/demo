<?php
class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('session');
    }
    
    
     
    public function login(){
        
        if (isset($this->session->userid) && !empty($this->session->userid)) {
             
            redirect(getUrl('home'));
        }
         
        $data['page_title'] = "Login";
        
        $data['content']    =   "layouts/Home/login";
        $template    =   "layouts/Home/login_template";
        $this->load->view($template,$data);  
        
//        $this->load->view('admin/login',$data);       
    }
    public function logout(){
        
        logout();
        redirect(getUrl('home'));
    }
}



