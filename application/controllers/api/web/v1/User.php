<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH . 'handlers/User_handler.php');
require_once (APPPATH . 'libraries/REST_Controller.php');

class User extends REST_Controller {

    public function __construct() {
        parent::__construct();
//        $responseArray = userLoginCheck(); 
 
        $this->userHandler = new User_handler();
    }
    public function Login_post(){
        
        $inputData = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        
        $this->form_validation->reset_validation();
        $this->form_validation->set_data($inputData);
        $this->form_validation->set_rules($this->config->item('LoginRules'));
        
        $output = array();
        
        if ($this->form_validation->run() == FALSE) {
            
            //$errors['msg'] =  $this->form_validation->error_array();
            $output['response']['messages'][] = $this->form_validation->error_array();
            $output['status'] = FALSE;
            $output['statusCode'] = STATUS_BAD_REQUEST;
            
        } else {

            require_once (APPPATH . 'handlers/User_handler.php');
            $this->userHandler = new User_handler();
            
            $responseArray = $this->userHandler->userLogin($inputData);
             
            if ($responseArray['status'] != 1) {
                if ($responseArray['response']['total'] == 0) {
                    $output['response']['messages'][] = $responseArray['response']['messages'];
                    $output['status'] = FALSE;
                    $output['statusCode'] = STATUS_OK;
                }
            } else {

                $output['response']['messages'][] = $responseArray['response']['messages'];
                $output['status'] = TRUE;
                $output['statusCode'] = STATUS_OK;
            }
            
        }
          
            echo json_encode($output);
        
        
    }
}