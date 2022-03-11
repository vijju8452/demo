<?php
require_once 'Common_model.php';

class Jobs_list_model extends Common_model {

    var $id;
    var $title;
    var $company;
    var $location;
    var $shortDesc;
    var $fullDesc;
    var $jobNature;
    var $salary;
    var $staus;
    
    
    function __construct() {
        parent::__construct();
//        $this->select[] = $this->id;
         //setting the table name
        $this->setTableName("jobs_list");
        //Giving alias names to table field names
        $this->_setFieldNames();
    }
   //Set the field values
    private function _setFieldNames() {
        $this->id = "id";
        $this->title = "title";
        $this->company = "company";
        $this->location = "location";
        $this->shortDesc = "short_desc";
        $this->fullDesc = "full_desc";
        $this->jobNature = "job_nature";
        $this->salary = "salary";
        $this->staus = "status";  
    }
    
}
?>