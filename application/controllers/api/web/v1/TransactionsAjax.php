<?php

require_once (APPPATH . 'libraries/REST_Controller.php');
//require_once (APPPATH . 'libraries/SimpleXLSX/SimpleXLSX.php');

class TransactionsAjax extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $responseArray = userLoginCheck();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('string');
        $this->load->library('session');
        require_once (APPPATH . 'handlers/Jobs_list_handler.php');
        require_once (APPPATH . 'handlers/Jobs_applications_handler.php');
        
        
//        require_once (APPPATH . 'handlers/Project_master_handler.php');
//        require_once (APPPATH . 'handlers/Department_master_handler.php');
    }
    public function saveJob_POST() {
         
        $inputData = array(
            'title' => $this->input->post('title'),
            'company' => $this->input->post('company'),
            'location' => $this->input->post('location'),
            'short_desc' => $this->input->post('short_desc'),
            'full_desc' => $this->input->post('full_desc'),
            'job_nature' => $this->input->post('job_nature'),
            'salary' => $this->input->post('salary'),
        );
         
        $output = array();

        if (false) {

            $output['response']['messages'][] = $this->form_validation->error_array();
            $output['status'] = FALSE;
            $output['statusCode'] = STATUS_BAD_REQUEST;
            return $output;
        } else {
            $this->Jobs_list_handler = new Jobs_list_handler();
            $responseArray = $this->Jobs_list_handler->saveJob($inputData);
        }

        echo json_encode($responseArray);
    }
    public function applyJob_POST() {
         
        $inputData = array(
            'id_job' => $this->input->post('id_job'),
            'id_user' => $this->input->post('id_user'),
        );
         
        $output = array();

        if (false) {

            $output['response']['messages'][] = $this->form_validation->error_array();
            $output['status'] = FALSE;
            $output['statusCode'] = STATUS_BAD_REQUEST;
            return $output;
        } else {
            $this->Jobs_applications_handler = new Jobs_applications_handler();
            $responseArray = $this->Jobs_applications_handler->applyJob($inputData);
        }

        echo json_encode($responseArray);
    }

     

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
}
