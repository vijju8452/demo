<?php
class Common extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    
    public static function getOptions($data){
        $options    =   '';
        foreach($data as $option){
            
            $options    .=  $this->load->view("common/lines_options",array('option' => $option),TRUE);       
        }     
        
    }
    
}



