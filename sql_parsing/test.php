<?php
/**
* Author  : MA Razzaque Rupom (rupom_315@yahoo.com)
* Version : 1.0
* Date    : 12 Feb, 2006
* Purpose : Importing valid SQL dump to DB
* Release : Released under GNU Public License
*/

require_once "parse.class.php";

mysql_connect("hostname","username","password") or die('Cant Connect...');
mysql_select_db("razz_test") or die('DB Connection Problem...');;


$parseObj = new parse('your_sql_file.sql');
$res      = $parseObj->startParsing();

if($res)
{
   echo "<b>Query Executed Successfully.</b>";
}

?>