<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-10 12:39:46 --> Query error: Duplicate entry 'P1235-DRPL' for key 'PRIMARY' - Invalid query: INSERT INTO `po_trans_prod_master` (`Prod_txt_cod`, `Prod_dt_dt`, `Prod_txt_cmpcd`, `Prod_txt_mine`, `Prod_txt_pitcd`, `Prod_txt_ptmstry`, `Prod_dbl_tqty`, `Prod_txt_uid`, `Prod_td_dt`, `Prod_td_stw`) VALUES ('P1235', '2017-10-03', 'DRPL', 'IARRORA', 'ALL', 'APPA', 123, 'admin', '2017-10-10', 'True')
ERROR - 2017-10-10 12:42:58 --> Severity: Notice --> Undefined variable: companyData C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 39
ERROR - 2017-10-10 12:50:21 --> Severity: Notice --> Undefined variable: companyData C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 54
ERROR - 2017-10-10 12:50:47 --> Query error: Duplicate entry 'P1234-DRPL' for key 'PRIMARY' - Invalid query: INSERT INTO `po_trans_prod_master` (`Prod_txt_cod`, `Prod_dt_dt`, `Prod_txt_cmpcd`, `Prod_txt_mine`, `Prod_txt_pitcd`, `Prod_txt_ptmstry`, `Prod_dbl_tqty`, `Prod_txt_uid`, `Prod_td_dt`, `Prod_td_stw`) VALUES ('P1234', '2017-10-03', 'DRPL', 'IARRORA', 'ALL', 'APPA', 123, 'admin', '2017-10-10', 'True')
ERROR - 2017-10-10 12:51:21 --> Query error: Duplicate entry 'P1234-DRPL' for key 'PRIMARY' - Invalid query: INSERT INTO `po_trans_prod_master` (`Prod_txt_cod`, `Prod_dt_dt`, `Prod_txt_cmpcd`, `Prod_txt_mine`, `Prod_txt_pitcd`, `Prod_txt_ptmstry`, `Prod_dbl_tqty`, `Prod_txt_uid`, `Prod_td_dt`, `Prod_td_stw`) VALUES ('P1234', '2017-10-03', 'DRPL', 'IARRORA', 'ALL', 'APPA', 123, 'admin', '2017-10-10', 'True')
ERROR - 2017-10-10 12:52:14 --> Query error: Duplicate entry 'P1235-DRPL-1' for key 'PRIMARY' - Invalid query: INSERT INTO `po_trans_prod_details` (`Prod_txt_cod`, `Prod_dt_date`, `Prod_txt_cmpcd`, `Prod_txt_slno`, `Prod_txt_blkcod`, `Prod_txt_st`, `Prod_dbl_leng`, `Prod_dbl_bred`, `Prod_dbl_hegt`, `Prod_dbl_qty`) VALUES ('P1235', '2017-10-03', 'DRPL', 1, 'test', 'semi', '12', '12', '12', '0.002')
ERROR - 2017-10-10 12:53:01 --> Query error: Duplicate entry 'P1235-DRPL' for key 'PRIMARY' - Invalid query: INSERT INTO `po_trans_prod_master` (`Prod_txt_cod`, `Prod_dt_dt`, `Prod_txt_cmpcd`, `Prod_txt_mine`, `Prod_txt_pitcd`, `Prod_txt_ptmstry`, `Prod_dbl_tqty`, `Prod_txt_uid`, `Prod_td_dt`, `Prod_td_stw`) VALUES ('P1235', '2017-10-03', 'DRPL', 'IARRORA', 'ALL', 'APPA', 123, 'admin', '2017-10-10', 'True')
ERROR - 2017-10-10 12:53:55 --> Query error: Duplicate entry 'P1235-DRPL' for key 'PRIMARY' - Invalid query: INSERT INTO `po_trans_prod_master` (`Prod_txt_cod`, `Prod_dt_dt`, `Prod_txt_cmpcd`, `Prod_txt_mine`, `Prod_txt_pitcd`, `Prod_txt_ptmstry`, `Prod_dbl_tqty`, `Prod_txt_uid`, `Prod_td_dt`, `Prod_td_stw`) VALUES ('P1235', '2017-10-03', 'DRPL', 'IARRORA', 'ALL', 'APPA', 123, 'admin', '2017-10-10', 'True')
ERROR - 2017-10-10 15:07:51 --> Severity: Notice --> Undefined property: TransactionsAjax::$allocCode C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')) as `sln`
FROM `po_trans_prod_master`
 LIMIT 1' at line 1 - Invalid query: SELECT MAX(trim(Leading "IA" FROM )) as `sln`
FROM `po_trans_prod_master`
 LIMIT 1
ERROR - 2017-10-10 15:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')) as `sln`
FROM `po_trans_prod_master`
 LIMIT 1' at line 1 - Invalid query: SELECT MAX(trim(Leading "IA" FROM )) as `sln`
FROM `po_trans_prod_master`
 LIMIT 1
ERROR - 2017-10-10 15:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '"asdf" FROM Prod_txt_cod)) as `sln`
FROM `po_trans_prod_master`
 LIMIT 1' at line 1 - Invalid query: SELECT MAX(trim(Leadinghh "asdf" FROM Prod_txt_cod)) as `sln`
FROM `po_trans_prod_master`
 LIMIT 1
ERROR - 2017-10-10 15:33:43 --> Severity: Notice --> Undefined property: Production_master_handler::$db C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 23
ERROR - 2017-10-10 15:33:43 --> Severity: error --> Exception: Call to a member function setlikeWildcard() on null C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 23
ERROR - 2017-10-10 15:34:07 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:34:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%%' ESCAPE '!'
 LIMIT 1' at line 3 - Invalid query: SELECT MAX(trim(Leading "IA" FROM Prod_txt_cod)) as `sln`
FROM `po_trans_prod_master`
WHERE  LIKE '%%' ESCAPE '!'
 LIMIT 1
ERROR - 2017-10-10 15:34:41 --> Severity: error --> Exception: Call to undefined method Production_master_model::setRecordss() C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 27
ERROR - 2017-10-10 15:34:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\demoapp\application\models\Common_model.php 202
ERROR - 2017-10-10 15:36:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\demoapp\application\models\Common_model.php 202
ERROR - 2017-10-10 15:37:00 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:37:14 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:37:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')) as `sln`
FROM `po_trans_prod_master`
WHERE 0 LIKE '%Prod!_txt!_cod%' ESCAPE '' at line 1 - Invalid query: SELECT MAX(trim(Leading "IA" FROM )) as `sln`
FROM `po_trans_prod_master`
WHERE 0 LIKE '%Prod!_txt!_cod%' ESCAPE '!'
 LIMIT 1
ERROR - 2017-10-10 15:40:32 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:40:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'LIKE '%IA!%%' ESCAPE '!'
 LIMIT 1' at line 3 - Invalid query: SELECT MAX(trim(Leading "IA" FROM Prod_txt_cod)) as `sln`
FROM `po_trans_prod_master`
WHERE  LIKE '%IA!%%' ESCAPE '!'
 LIMIT 1
ERROR - 2017-10-10 15:41:06 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:41:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')) as `sln`
FROM `po_trans_prod_master`
WHERE `Prod_txt_cod` LIKE '%IA!%%' ESCAP' at line 1 - Invalid query: SELECT MAX(trim(Leading "IA" FROM )) as `sln`
FROM `po_trans_prod_master`
WHERE `Prod_txt_cod` LIKE '%IA!%%' ESCAPE '!'
 LIMIT 1
ERROR - 2017-10-10 15:45:17 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')) as `sln`
FROM `po_trans_prod_master`
WHERE `Prod_txt_cod` like IA%
 LIMIT 1' at line 1 - Invalid query: SELECT MAX(trim(Leading "IA" FROM )) as `sln`
FROM `po_trans_prod_master`
WHERE `Prod_txt_cod` like IA%
 LIMIT 1
ERROR - 2017-10-10 15:45:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '%
 LIMIT 1' at line 3 - Invalid query: SELECT MAX(trim(Leading "IA" FROM Prod_txt_cod)) as `sln`
FROM `po_trans_prod_master`
WHERE `Prod_txt_cod` like IA%
 LIMIT 1
ERROR - 2017-10-10 15:52:59 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 32
ERROR - 2017-10-10 15:54:23 --> Severity: Notice --> Undefined index: p_code C:\xampp\htdocs\demoapp\application\handlers\Production_master_handler.php 40
ERROR - 2017-10-10 15:54:23 --> Query error: Column 'Prod_txt_cod' cannot be null - Invalid query: INSERT INTO `po_trans_prod_master` (`Prod_txt_cod`, `Prod_dt_dt`, `Prod_txt_cmpcd`, `Prod_txt_mine`, `Prod_txt_pitcd`, `Prod_txt_ptmstry`, `Prod_dbl_tqty`, `Prod_txt_uid`, `Prod_td_dt`, `Prod_td_stw`) VALUES (NULL, '2017-10-03', 'DRPL', 'VBLUE', '', 'APPA', 123, 'admin', '2017-10-10', 'True')
ERROR - 2017-10-10 15:56:36 --> Severity: Notice --> Undefined property: TransactionsAjax::$producitonCodee C:\xampp\htdocs\demoapp\system\core\Model.php 77
ERROR - 2017-10-10 15:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'like "VB%"
 LIMIT 1' at line 3 - Invalid query: SELECT MAX(trim(Leading "VB" FROM Prod_txt_cod)) as `sln`
FROM `po_trans_prod_master`
WHERE  like "VB%"
 LIMIT 1
