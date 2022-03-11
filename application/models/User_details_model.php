<?php
/**
 User entity related model file
 * @package		CodeIgniter
 * @author		Atumit Development Team
 * @copyright	Copyright (c) 2017, Atumit.
 * @Version		Version 1.0
 * @Created     20-04-2017
 * @Last Modified 20-04-2017
 * @Last Modified By Sridevi Gara
 */
require_once 'Common_model.php';

class User_details_model extends Common_model {

    var $userId;
    var $roleId;
    var $username;
    var $password;
    var $email;
    var $createdDate;
    var $createdBy;
    var $updatedDate;
    var $updaedBy;
    var $staus;
    
    
    function __construct() {
        parent::__construct();
        $this->select[] = $this->userId;
         //setting the table name
        $this->setTableName("users_details");
        //Giving alias names to table field names
        $this->_setFieldNames();
    }
   //Set the field values
    private function _setFieldNames() {
        $this->userId = "uid";
        $this->roleId = "id_role";
        $this->username = "username";
        $this->password = "password";
        $this->email = "email";
        $this->createdDate = "created_date";
        $this->createdBy = "created_by";
        $this->updatedDate = "updated_date";
        $this->updaedBy = "updated_by";  
        $this->staus = "status";  
    }
    
}
?>