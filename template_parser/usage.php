<?php
/**
* Usage of Simple TemplateParser Class
*
* @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/)
*             URL: http://www.rupom.info  
* @version :  1.0
* Purpose  :  Parsing Simple Template File and Data that Contains Macros
*/

require_once "TemplateParser.class.php";
$data = array();
$data['first_name']  = "MA";
$data['last_name']   = "Razzaque";
$data['nick_name']   = "Rupom";
$data['password']    = "supersecret";
$data['sender_name'] = "Administrator";
$data['site_name']   = "Name_Of_Site";

$obj = new TemplateParser();
$obj->initData($data);

//Parse Template File
$parsedData = $obj->parseTemplateFile("template.html");
echo $parsedData;

echo "<br>-----------------------------------<br>";

//Parse Template Data 
$parsedData = $obj->parseTemplateData(file_get_contents("template.html"));
echo $parsedData;

?>