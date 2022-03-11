<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function userLoginCheck() {

    $CI = & get_instance();
    if (!isset($CI->session->userid) || empty($CI->session->userid)) {
        redirect(getUrl('login'));
    }
        
}

function getSessionUserId() {
    $CI = & get_instance();
    if (($CI->session->userid != " ") && isset($CI->session->userid)) {
        $userid = $CI->session->userid;
        return $userid;
    }
}

function getMedicalRegistrationCode() {
    $CI = & get_instance();
    if (($CI->session->userid != " ") && isset($CI->session->userid)) {
        $userid = $CI->session->userid;
        $mediacalIncidentCode = strtoupper($CI->session->countryshortname) . "/" . BCP_STRING . $userid . "/";
        return $mediacalIncidentCode;
    }
}

function getMedicalIncidentCode() {
    $CI = & get_instance();
    if (($CI->session->userid != " ") && isset($CI->session->userid)) {
        $userid = $CI->session->userid;
        $mediacalIncidentCode = MEDICAL_INCIDENT_STRING . "/" . strtoupper($CI->session->countryshortname) . "/" . BCP_STRING . $userid . "/" . MEDICAL_RECORD_STRING;
        return $mediacalIncidentCode;
    }
}

function getMedicalVisitCode() {
    $CI = & get_instance();
    if (($CI->session->userid != " ") && isset($CI->session->userid)) {
        $userid = $CI->session->userid;
        $mediacalIncidentCode = MEDICAL_INCIDENT_VISIT_STRING . "/" . strtoupper($CI->session->countryshortname) . "/" . BCP_STRING . $userid . "/";
        return $mediacalIncidentCode;
    }
}

function logout() {
    $CI = & get_instance();
    $sessionData = array("userid" => '',
        "username" => '');
    $CI->session->unset_userdata($sessionData);
    $CI->session->sess_destroy();
    
}

function site_url() {



    $CI = & get_instance();
    $host = $CI->config->item('serverUrl');
    return $host;
}

function replaceSpecialCharsInFileName($filename) {
    $filename = pathinfo($filename, PATHINFO_FILENAME);
    $filename = trim($filename);
    $filename = str_replace("'", "", $filename);
    $new_filename = preg_replace('/[^\p{L}\p{N}]/u', '_', $filename);
    return $new_filename;
}

function debugArray($array) {
    echo '<pre>';
    print_r($array);
}

function uploadImage($image, $type = "") {
    //print_r($image); exit;
    $CI = & get_instance();
    $profilePicture = "";
    if (isset($image['name']) && !empty($image['name'])) {

        $file = $image['name'];
        $tmp = $image['tmp_name'];
        $size = $image['size'];
        
        $supported_image = $CI->config->item('allowed_img_types');
        $supported_imagesize = $CI->config->item('allowed_img_size');

        $src_file_name = basename($file);
        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
        if (in_array($ext, $supported_image)) {
        
            if ($size <= $supported_imagesize) {

                if ($type == "profile") {
                    $remote_file_path = $CI->config->item('hff_media_profile_image_path');
                } else if ($type == "signature") {
                    $remote_file_path = $CI->config->item('hff_media_signature_image_path');
                }
                
                //$remote_file_path = $CI->config->item('hff_media_path');
                //echo $remote_file_path; exit;

                $basename_file = replaceSpecialCharsInFileName($file);
                $re_file = $basename_file . '_' . time() . '.' . $ext;
                $remote_file = $remote_file_path . $re_file;
                
                $ftp_server = $CI->config->item('ftp_server');
                $ftp_user_name = $CI->config->item('ftp_user_name');
                $ftp_user_pass = $CI->config->item('ftp_user_pass');
                $conn_id = ftp_connect($ftp_server);

                if ($conn_id) {
                    
                    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

                    if ($login_result) {
                        
                        ftp_pasv($conn_id, true);
                       
                        //echo $remote_file ." === ". $tmp;
                        
                        ///$fp = fopen($re_file, 'r');
                        ///if (ftp_fput($conn_id, $remote_file, $fp, FTP_ASCII)) {
                        
                        if (ftp_put($conn_id, $remote_file, $tmp, FTP_BINARY, $startpos = 0 )) {
                            //echo "successfully uploaded $remote_file\n";
                            $profilePicture = $re_file;
                        }
                        
                        /*
                        try{
                            if (ftp_put($conn_id, $remote_file, $tmp, FTP_ASCII)) {
                                //echo "successfully uploaded $file\n";
                                $profilePicture = $re_file;
                            } else {
                                echo "There was a problem while uploading $re_file\n";
                            }

                        } catch (Exception $ex) {
                            echo $ex;
                        }                         
                        */
                        
                        ftp_close($conn_id);
                                           
                        
                    } else {
                        ftp_close($conn_id);
                        //log_message("error", $CI->lang->line('error_ftp_auth_fail_message'));
                        
                        $output['status'] = FALSE;
                        $output['response']['messages'][] = $CI->lang->line('error_ftp_auth_fail_message');
                        $output['statusCode'] = STATUS_SERVER_ERROR;
                        //$this->response($output, $output['statusCode']);
                        return $output;
                    }
                    
                } else {
                    
                    //log_message("error", $CI->lang->line('error_ftp_connection_fail_message'));
                    
                    $output['status'] = FALSE;
                    $output['response']['messages'][] = $CI->lang->line('error_ftp_connection_fail_message');
                    $output['statusCode'] = STATUS_SERVER_ERROR;
                    // $this->response($output, $output['statusCode']);
                    return $output;
                }
                
            } else {
                
                //log_message("error", $CI->lang->line('error_image_size_exceeds_config_filesize_value_message'));
                
                $output['status'] = FALSE;
                $output['response']['messages'][] = $CI->lang->line('error_invalid_image_size_message');
                $output['statusCode'] = STATUS_INVALID;
                return $output;
            }
            
        } else {
            $output['status'] = FALSE;
            $output['response']['messages'][] = $CI->lang->line('error_invalid_image_format_message');
            $output['statusCode'] = STATUS_INVALID;
            // $this->response($output, $output['statusCode']);
            return $output;
        }
        
        //if ($profilePicture != '') {
            $output['status'] = TRUE;
            $output["response"]["imagename"] = $profilePicture;
            $output['statusCode'] = STATUS_OK;
            return $output;
        //}
        /*else {
            $output['status'] = FALSE;
            //$output['response']['messages'][] = $CI->lang->line('error_invalid_image_format_message');
            $output['statusCode'] = STATUS_SERVER_ERROR;
            return $output;
        }*/
    }
}

function getUrl($name) {

    switch ($name) {

        case 'login':
            $url = site_url() . 'login';
            break;
        case 'logout':
            $url = site_url() . 'logout';
            break;
        case 'home':
            $url = site_url() . 'home';
            break;
        

        default :
            $url = site_url() . 'Error';
            break;
    }
    return $url;
}

function setSampleUserData() {
    $CI = & get_instance();
    $CI->session->set_userdata('userid', "59");
    $CI->session->set_userdata('username', "sridevigara");
    $CI->session->set_userdata('userrole', "doctor");
    $CI->session->set_userdata('countryshortname', "IND");
    $CI->session->set_userdata('countryid', "101");
    $CI->session->set_userdata('country', "India");
}

function checkMobileCountryCode($mobileNo = "", $countryId = 0) {

    if ($mobileNo != "") {

        $mobileLength = strlen($mobileNo);

        $countryCode = DEFAULT_MOBILE_COUNTRY_CODE;

        if ($countryId != "" && $countryId > 0) {
            $CI = & get_instance();
            require_once (APPPATH . 'handlers/Country_handler.php');
            $CI->countryHandler = new Country_handler();

            $countryData = $CI->countryHandler->getCountryData($countryId);
            if ($countryData['status'] == 1) {
                if ($countryData['response']['total'] > 0) {
                    $countryCode = $countryData['response']['countryData'][0]['code'];
                }
            }
        }

        if ($mobileLength == 10) {
            $mobileNo = $countryCode . $mobileNo;
        } else if ($mobileLength == 11) {
            $mobileNo = preg_replace('/^0/', $countryCode, $mobileNo);
        }

        if (!preg_match("/[+]/", $mobileNo)) {
            $mobileNo = "+" . $mobileNo;
        }
    }

    return $mobileNo;
}

function generateOtpCode() {
    $number_of_digits = OPT_DIGIT_LENGTH;
    return substr(number_format(time() * mt_rand(), 0, '', ''), 0, $number_of_digits);
}

function checkImageByURL($url = ""){
    if($url!=""){
        if(@get_headers($url)[0] != 'HTTP/1.1 404 Not Found'){
            return $url;   
        } 
    }
    return "";
}