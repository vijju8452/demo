<?php

require_once (APPPATH . 'handlers/handler.php');

class Jobs_applications_handler extends Handler {

    var $ci;

    public function __construct() {
        parent::__construct();
        $this->ci = parent::$CI;
        $this->ci->load->model('Jobs_applications_model');
    }
public function getJobAppliedData($id,$id_user) {
        
         $where = array();
        
        
        $this->ci->Jobs_applications_model->resetVariable(); 
        $selectInput = array();
        
        $selectInput['id'] = $this->ci->Jobs_applications_model->id;
        
        if(!empty($id)){
            $where[$this->ci->Jobs_applications_model->idUser] =   $id_user;
            $where[$this->ci->Jobs_applications_model->idJob] =   $id;
            $this->ci->Jobs_applications_model->setWhere($where);
             
        }
         
        $this->ci->Jobs_applications_model->setSelect($selectInput);
        $companyData = $this->ci->Jobs_applications_model->get();
//        echo '<pre>';
//        print_r($companyData);
        return $companyData;
    }
public function applyJob($inputdata) {
        
        $this->ci->Jobs_applications_model->resetVariable();
         
        
         
        
        $this->ci->Jobs_applications_model->insertUpdateArray[$this->ci->Jobs_applications_model->idJob] = $inputdata["id_job"];
        $this->ci->Jobs_applications_model->insertUpdateArray[$this->ci->Jobs_applications_model->idUser] = $inputdata["id_user"]; 
         
        
          
            $ack    =   $this->ci->Jobs_applications_model->insert_data($this->ci->Jobs_applications_model->dbTable, $this->ci->Jobs_applications_model->insertUpdateArray);
        
        
            $output['status'] = TRUE;
            $output['response']['messages'][] = 'Job Applied Successfully';
            $output['statusCode'] = STATUS_OK;
            
        
        return $output;
    }
     

}
