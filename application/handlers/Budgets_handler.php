<?php

require_once (APPPATH . 'handlers/handler.php');

class Budgets_handler extends Handler {

    var $ci;

    public function __construct() {
        parent::__construct();
        $this->ci = parent::$CI;
        $this->ci->load->model('Budgets_model');
    }

    public function getBudgets() {
//        $this->ci->load->model('Employee_master_model');
        $this->ci->Budgets_model->resetVariable();
        $selectInput = array();

        $selectInput['month'] = $this->ci->Budgets_model->month;
        $selectInput['year'] = $this->ci->Budgets_model->year;
        $selectInput['quarter'] = $this->ci->Budgets_model->quarter;
        $selectInput['revenue'] = 'sum(' . $this->ci->Budgets_model->revenue . ')';
        $selectInput['expense'] = 'sum(' . $this->ci->Budgets_model->expense . ')';

        $this->ci->Budgets_model->setOrderBy(["STR_TO_DATE(CONCAT('0001 ', ".$this->ci->Budgets_model->month.", ' 01'), '%Y %M %d')"]);
        $this->ci->Budgets_model->groupByArray = [$this->ci->Budgets_model->month];
        $this->ci->Budgets_model->setSelect($selectInput);
        $employeeData = $this->ci->Budgets_model->get();

        return $employeeData;
    }
    public function getBudgetSource() {
//        $this->ci->load->model('Employee_master_model');
        $this->ci->Budgets_model->resetVariable();
        $selectInput = array();

        $selectInput['id']    = $this->ci->Budgets_model->id;
        $selectInput['project_code']    = $this->ci->Budgets_model->projectCode;
        $selectInput['project']         = $this->ci->Budgets_model->project;
        $selectInput['type']            = $this->ci->Budgets_model->projectType;
        $selectInput['month']           = $this->ci->Budgets_model->month;
        $selectInput['year']           = $this->ci->Budgets_model->year;
        $selectInput['quarter']         = $this->ci->Budgets_model->quarter;
        $selectInput['revenue']         = $this->ci->Budgets_model->revenue;
        $selectInput['expense']         = $this->ci->Budgets_model->expense;

        $this->ci->Budgets_model->setOrderBy([$this->ci->Budgets_model->project.' asc',$this->ci->Budgets_model->month.' asc']);
        $this->ci->Budgets_model->setSelect($selectInput);
        $employeeData = $this->ci->Budgets_model->get();

        return $employeeData;
    }
    public function getMonthBudgetSource($month) {
//        $this->ci->load->model('Employee_master_model');
        $this->ci->Budgets_model->resetVariable();
        $selectInput = array();
        $where = array();
        
        $where[$this->ci->Budgets_model->month] = $month;
        
        $selectInput['id']    = $this->ci->Budgets_model->id;
        $selectInput['project_code']    = $this->ci->Budgets_model->projectCode;
        $selectInput['project']         = $this->ci->Budgets_model->project;
        $selectInput['type']            = $this->ci->Budgets_model->projectType;
        $selectInput['month']           = $this->ci->Budgets_model->month;
        $selectInput['year']           = $this->ci->Budgets_model->year;
        $selectInput['quarter']         = $this->ci->Budgets_model->quarter;
        $selectInput['revenue']         = $this->ci->Budgets_model->revenue;
        $selectInput['expense']         = $this->ci->Budgets_model->expense;

        
        $this->ci->Budgets_model->setSelect($selectInput);
        $this->ci->Budgets_model->setOrderBy([$this->ci->Budgets_model->project.' asc']);
        $this->ci->Budgets_model->setWhere($where);
        $budgetData = $this->ci->Budgets_model->get();
//        debugArray($where); exit;
        return $budgetData;
    }

    public function saveBudgets($inputData) {
        $output = array();
        $this->ci->Budgets_model->resetVariable();
        foreach ($inputData as $row) {
            $this->ci->Budgets_model->insertUpdateArray[] = array(
                $this->ci->Budgets_model->projectCode => $row[0],
                $this->ci->Budgets_model->project => $row[1],
                $this->ci->Budgets_model->projectType => $row[2],
                $this->ci->Budgets_model->year => $row[4],
                $this->ci->Budgets_model->month => ltrim(stristr(str_replace(' ','',$row[3]), '.'), '.'),
                $this->ci->Budgets_model->quarter => $row[5],
                $this->ci->Budgets_model->revenue => $row[6],
                $this->ci->Budgets_model->expense => $row[7],
            );
        }
        $this->ci->Budgets_model->truncateTable();
         
        $ack = $this->ci->Budgets_model->insertMultiple_data();

        if($ack){
            $output['status'] = TRUE;
            $output['response']['messages'][] = $this->ci->lang->line('success_budget_upload');
            $output['statusCode'] = STATUS_OK;
        }else{
            $output['status'] = false;
            $output['response']['messages'][] = $this->ci->lang->line('error_something_went_wrong_message');
            $output['statusCode'] = STATUS_SERVER_ERROR;
        }

        return $output;
    }
    public function updateBudgets($inputData,$oper) {
         
        $output = array();
        $this->ci->Budgets_model->resetVariable();
        
        
        $update_data[$this->ci->Budgets_model->projectCode] = $inputData["project_code"];
        $update_data[$this->ci->Budgets_model->project] = $inputData["project"];
        $update_data[$this->ci->Budgets_model->projectType] = $inputData["type"]; 
        $update_data[$this->ci->Budgets_model->month] = str_replace(' ','',$inputData["month"]); 
        $update_data[$this->ci->Budgets_model->year] = $inputData["year"]; 
        $update_data[$this->ci->Budgets_model->quarter] = $inputData["quarter"]; 
        $update_data[$this->ci->Budgets_model->revenue] = $inputData["revenue"]; 
        $update_data[$this->ci->Budgets_model->expense] = $inputData["expense"]; 
        
        $this->ci->Budgets_model->setInsertUpdateData($update_data);
        
        if($oper != 'add'){
            $where[$this->ci->Budgets_model->id]   =   $inputData['id'];
            $this->ci->Budgets_model->setWhere($where);
            $ack = $this->ci->Budgets_model->update_data();
        }else{
            $res = $this->checkDuplicateEntry($inputData);
            if($res > 0){
                $output['status'] = FALSE;
                $output['response']['messages'][] = $this->ci->lang->line('budget_add_duplicate');
                $output['statusCode'] = STATUS_OK;
            }else{
                $ack = $this->ci->Budgets_model->insert_data();
                if($ack){
                    $output['status'] = TRUE;
                    $output['response']['messages'][] = $this->ci->lang->line('success_budget_update');
                    $output['statusCode'] = STATUS_OK;
                }else{
                    $output['status'] = false;
                    $output['response']['messages'][] = $this->ci->lang->line('error_something_went_wrong_message');
                    $output['statusCode'] = STATUS_SERVER_ERROR;
                }
            }
        }
        

        return $output;
    }
    public function checkDuplicateEntry($data){
        $this->ci->Budgets_model->resetVariable();
        $selectInput = array();
        $where = array();
        
//        $where[$this->ci->Budgets_model->month] = $data['month'];
        $where[$this->ci->Budgets_model->year] = $data['year'];
//        $where[$this->ci->Budgets_model->projectCode] = $data['project_code'];
        
        $selectInput['id']    = $this->ci->Budgets_model->id;
        
        $this->ci->Budgets_model->setSelect($selectInput);
        $this->ci->Budgets_model->setWhere($where);
        $budgetData = $this->ci->Budgets_model->get();
//        debugArray($where); exit;
        return count($budgetData);
    }

}
