<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


//Status Code
define('STATUS_OK', 200);
define('STATUS_MAIL_SENT', 200);
define('STATUS_UPDATED', 201);
define('STATUS_CREATED', 201);

define('STATUS_BAD_REQUEST', 400);
define('STATUS_UNAUTHORIZED', 401);
//define('STATUS_NO_DATA', 404);

define('STATUS_INVALID_SESSION', 406);
define('STATUS_CONFLICT', 409);
define('STATUS_PRECONDITION_FAILED', 412);
define('STATUS_INVALID_INPUTS', 460);
define('STATUS_CANNOT_PUBLISH_PAST_EVENT', 460);
define('STATUS_ACCOUNT_ALREADY_ACTIVATED', 461);
define('STATUS_INVALID_DISCOUNT_CODE', 463);
define('STATUS_INVALID_REFERRAL_CODE', 464);

define('STATUS_DISCOUNT_USAGE_EXCEEDED', 467);

define('STATUS_SERVER_ERROR', 500);
//define('STATUS_NO_DATA', 504);
define('STATUS_INVALID_USER', 506);

define('STATUS_INCORRECT_CREDENTIALS', 435); 
define('STATUS_INACTIVE_USER', 436);
define('STATUS_BLOCKED_USER', 437);
define('STATUS_USER_ROLE_NOT_FOUND', 438);
define('STATUS_DATA_EXISTS', 439);
define('STATUS_PASSWORD_MISMATCH', 440);
define('STATUS_INVALID', 441);
define('STATUS_SERVICE_DISABLED', 442);
define('STATUS_MAIL_NOT_SENT', 443);
define('STATUS_SMS_NOT_SENT', 444);
define('STATUS_NO_DATA', 445);

define('ENGLISH',"English");
define('ENGLISH_CODE',"eng");
define('BCP_STRING',"BCP");
define('PATIENT_STRING',"PA");
define('MEDICAL_RECORD_STRING',"MR");
define('MEDICAL_INCIDENT_STRING',"INC");
define('MEDICAL_INCIDENT_VISIT_STRING',"VIST");
define('MEDICAL_NON_INCIDENT_STRING',"NONINC");
define('PRESCRIPTION_STRING',"PR");
define('OPT_DIGIT_LENGTH', 4); /// 4 Digits
define('OPT_VALIDITY', 2); /// 2 Minutes

define('ROLE_DOCTOR',"doctor");
define('ROLE_BCP',"bcp");
define('ROLE_ADMIN',"admin");

define('MOBILE_TYPE','mobile');
define('WEB_TYPE','web');

define('DEFAULT_MOBILE_COUNTRY_CODE','+91');
