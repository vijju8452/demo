<?php

////////////////Form Validations/////////////////
$config = array(
    'LoginRules' => array(///*** User - Login() ****///
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    ),
    'projectMaster' => array(
        array(
            'field' => 'projectName',
            'label' => 'Project Name',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'projectCode',
            'label' => 'Project Code',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'projectType',
            'label' => 'Project Type',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'sowEndDate',
            'label' => 'SOW End Date',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'id_manager',
            'label' => 'Manager',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'id_bu_lead',
            'label' => 'BU Lead',
            'rules' => 'trim|required'
        ),
    ),
    'employeeMaster' => array(
        array(
            'field' => 'employeeCode',
            'label' => 'Employee Code',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'firstName',
            'label' => 'First Name',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'lastName',
            'label' => 'Last Name',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'dateJoining',
            'label' => 'Date Of Joining',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'id_department',
            'label' => 'Department',
            'rules' => 'trim|required'
        ),
    ),
    'departmentMaster' => array(
        array(
            'field' => 'departmentName',
            'label' => 'Department',
            'rules' => 'trim|required'
        ) 
    ),
    'tsUpload' => array(
        array(
            'field' => 'ts_month',
            'label' => 'Month',
            'rules' => 'trim|required'
        ) 
    ),
    
    
    
    
    
    //old code needs to be deleted
    'blockAddition' => array(
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'block_code',
            'label' => 'Block Code',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'length',
            'label' => 'Length',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'breadth',
            'label' => 'Breadth',
            'rules' => 'trim|required'
        ),
        
    ),
    'productionOrder' => array(
        array(
            'field' => 'companyCode',
            'label' => 'Company Code',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'id_mine',
            'label' => 'Mine',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'id_pit',
            'label' => 'Pit',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'id_mastry',
            'label' => 'Mastry',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'production_date',
            'label' => 'Production Date',
            'rules' => 'trim|required'
        ), 
        
    )
);

