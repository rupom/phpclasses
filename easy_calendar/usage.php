<?php
/**
* Usage of EasyCalendar Class
*
* @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/)
*             URL: http://www.rupom.info  
* @version :  1.0
* Purpose  :  Creating Year and Month Calendar Easily By Unix System Call
*/

//Usage of Class EasyCalendar
include_once "EasyCalendar.class.php";

$Obj = new EasyCalendar();
$Obj->getYearCalendar(2006);
$Obj->getMonthCalendar(2006, 4);
$Obj->getYearCalendar(2010);

?>