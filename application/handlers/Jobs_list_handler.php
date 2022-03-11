<?php

require_once (APPPATH . 'handlers/handler.php');

class Jobs_list_handler extends Handler {

    var $ci;

    public function __construct() {
        parent::__construct();
        $this->ci = parent::$CI;
        $this->ci->load->model('Jobs_list_model');
    }

    public function saveJob($inputData) {
        
        $this->ci->Jobs_list_model->resetVariable();
         
        
         
        
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->title] = $inputData["title"];
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->company] = $inputData["company"];
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->location] =  $inputData["location"]; 
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->shortDesc] = $inputData["short_desc"];
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->fullDesc] = $inputData["full_desc"]; 
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->jobNature] = $inputData["job_nature"]; 
        $this->ci->Jobs_list_model->insertUpdateArray[$this->ci->Jobs_list_model->salary] = $inputData["salary"]; 
         
        
          
            $ack    =   $this->ci->Jobs_list_model->insert_data($this->ci->Jobs_list_model->dbTable, $this->ci->Jobs_list_model->insertUpdateArray);
        
        
            $output['status'] = TRUE;
            $output['response']['messages'][] = 'Job Saved Successfully';
            $output['statusCode'] = STATUS_OK;
            
        
        return $output;
    }
    
    public function getJobsList($id = null) {
        
         $where = array();
        
        
        $this->ci->Jobs_list_model->resetVariable(); 
        $selectInput = array();
        
        $selectInput['id'] = $this->ci->Jobs_list_model->id;
        $selectInput['title'] = $this->ci->Jobs_list_model->title;
        $selectInput['company'] = $this->ci->Jobs_list_model->company;
        $selectInput['location'] = $this->ci->Jobs_list_model->location;
        $selectInput['short_desc'] = $this->ci->Jobs_list_model->shortDesc;
        $selectInput['full_desc'] = $this->ci->Jobs_list_model->fullDesc;
        $selectInput['job_nature'] = $this->ci->Jobs_list_model->jobNature;
        $selectInput['salary'] = $this->ci->Jobs_list_model->salary;
        
        if(!empty($id)){
            $where[$this->ci->Jobs_list_model->id] =   $id;
            $this->ci->Jobs_list_model->setWhere($where);
             
        }
         
        $this->ci->Jobs_list_model->setSelect($selectInput);
        $companyData = $this->ci->Jobs_list_model->get();
//        echo '<pre>';
//        print_r($companyData);
        return $companyData;
    }

}
