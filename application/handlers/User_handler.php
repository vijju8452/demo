<?php

/**
 * User related business logic will be defined in this class
 *
 * @package		CodeIgniter
 * @author		Qison  Dev Team
 * @copyright	Copyright (c) 2015, MeraEvents.
 * @Version		Version 1.0
 * @Since       Class available since Release Version 1.0 
 * @Created     18-06-2015
 * @Last Modified 25-06-2015
 */
require_once(APPPATH . 'handlers/handler.php');


class User_handler extends Handler {

    var $ci;
    public $messagetemplateHandler;
    public $userotpHandler;

    public function __construct() {
        parent::__construct();
        $this->ci = parent::$CI;
        
    }

    public function userLogin($inputData) {
        
        $this->ci->load->model('User_details_model');
       $userData = $this->getUserData($inputData);
        
        if (count($userData) > 0) {
            
                $userId = $userData[0]['userId'];
                $inputData['userId'] = $userId;
                
                
                if ($userData[0]['password'] == strtoupper(md5($inputData['password']))) {
                    
                    $this->ci->session->set_userdata('userid', $userData[0]['userId']);
                    $this->ci->session->set_userdata('username', $userData[0]['username']);
                    $this->ci->session->set_userdata('role', $userData[0]['roleId']);
                    
                    $output['status'] = TRUE;
                    $output['response']['messages'][] = $this->ci->lang->line('success_user_login_message');
                    $output['response']['total'] = 0;
                    $output['statusCode'] = STATUS_OK;
                     
                    return $output;
                } else {
                    $output['status'] = FALSE;
                    $output['response']['messages'][] = $this->ci->lang->line('error_incorrect_password_message');
                    $output['response']['total'] = 0;
                    $output['statusCode'] = STATUS_INCORRECT_CREDENTIALS;
                    return $output;
                }
             
        } else {
            $output['status'] = FALSE;
            $output['response']['messages'][] = $this->ci->lang->line('error_incorrect_password_message');
            $output['response']['total'] = 0;
            $output['statusCode'] = STATUS_INCORRECT_CREDENTIALS;
            return $output;
            
            
        }
        
        return $output;
    }

    public function getUserForms($inputArray,$key = '',$module = '') {
        $this->ci->load->model('User_forms_model');
        $this->ci->User_forms_model->resetVariable();
        $selectInput = array(); 
        $where = array();
        $selectInput['userId'] = $this->ci->User_forms_model->userId;
        $selectInput['main'] = $this->ci->User_forms_model->main;
        $selectInput['sub'] = $this->ci->User_forms_model->sub;
        $selectInput['url'] = $this->ci->User_forms_model->url;
        $selectInput['url_mask'] = $this->ci->User_forms_model->url_mask;
        $selectInput['act_url'] = $this->ci->User_forms_model->description;
        
        
        
        if(!empty($key)){
            $where[$this->ci->User_forms_model->url_mask] = $key;
        }
        if($module != ''){
            $where[$this->ci->User_forms_model->url_head] = $module;
        }
        $where[$this->ci->User_forms_model->userId] = $inputArray['userid'];
        //$where[$this->ci->User_model->password]=$this->setSha1($inputArray['password']);
        $this->ci->User_forms_model->setSelect($selectInput);
        $this->ci->User_forms_model->setWhere($where);
        $userForms = $this->ci->User_forms_model->get();
        
        return $userForms;
    }
    public function getUserData($inputArray) {
        
        $this->ci->load->model('User_details_model');
        $this->ci->User_details_model->resetVariable();
        $selectInput = array();
        $where = array();
        $selectInput['userId'] = $this->ci->User_details_model->userId;
        $selectInput['roleId'] = $this->ci->User_details_model->roleId;
        $selectInput['username'] = $this->ci->User_details_model->username;
        $selectInput['password'] = $this->ci->User_details_model->password;
        $selectInput['email'] = $this->ci->User_details_model->email;
        
        $where[$this->ci->User_details_model->username] = $inputArray['username'];
        //$where[$this->ci->User_model->password]=$this->setSha1($inputArray['password']);
        $this->ci->User_details_model->setSelect($selectInput);
        $this->ci->User_details_model->setWhere($where);
        $this->ci->User_details_model->setRecords(1);
        $userData = $this->ci->User_details_model->get();
        
        return $userData;
    }
    public function getPitAllocations() {
        $this->ci->load->model('Pit_allocations_model');
        $this->ci->Pit_allocations_model->resetVariable();
        $selectInput = array();
        $countryData = array();
        $where = array();
        $selectInput['allocCode'] = $this->ci->Pit_allocations_model->allocCode;
        $selectInput['companyCode'] = $this->ci->Pit_allocations_model->companyCode;
        $selectInput['pitCode'] = $this->ci->Pit_allocations_model->pitCode;
        $selectInput['allottedDate'] = $this->ci->Pit_allocations_model->allottedDate;
        $selectInput['mastryCode'] = $this->ci->Pit_allocations_model->mastryCode;
        $selectInput['fromDate'] = $this->ci->Pit_allocations_model->fromDate;
        $selectInput['toDate'] = $this->ci->Pit_allocations_model->toDate;
        $selectInput['userId'] = $this->ci->Pit_allocations_model->userId;
        $selectInput['transactionDate'] = $this->ci->Pit_allocations_model->transactionDate;
        $selectInput['mine'] = $this->ci->Pit_allocations_model->mine;
        
//        $where[$this->ci->Pit_allocations_model->userId] = $inputArray['username'];
        //$where[$this->ci->User_model->password]=$this->setSha1($inputArray['password']);
        $this->ci->Pit_allocations_model->setSelect($selectInput);
        $this->ci->Pit_allocations_model->setWhere($where);
        $pitAllocations = $this->ci->Pit_allocations_model->get();
        
        return $pitAllocations;
    }

}
