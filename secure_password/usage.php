<?php
/**
* Class : Secure Password
*
* @PHPVER  :  5.0
* @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/)
*             URL: http://www.rupom.info  
*        
* @version :  1.0
* Date     :  05/23/2006
* Purpose  :  Generating and Matching Secure and Strong Password
*/

require_once "SecurePassword.class.php";

$obj = new SecurePassword();
$obj->initSalt();
$password = 'abcd'; //password
$hash = $obj->generatePasswordHash($password);  //hash created

//Matching results true if this $hash is for this $password
if($obj->matchPassword($password, $hash)) //match password by the hash
{
   echo "<br>YES, Matched";
}
else
{
   echo "<br>No, Wrong Password";
}

//Try with wrong password
$wrongPassword = 'asdf';

if($obj->matchPassword($wrongPassword, $hash)) //match password by the hash
{
   echo "<br>YES, Matched";
}
else
{
   echo "<br>No, Wrong Password";
}

/*
//Hash from DB

//DB Connection
mysql_connect("localhost","root","");
mysql_select_db("test");

$sourceTable = 'users';

$q = "SELECT password FROM $sourceTable where name='rupom'";               
$res = mysql_query($q);
     
if(mysql_num_rows($res))
{
   while($row = mysql_fetch_array($res))
   {        	  
   	  $hash = $row['password'];   	  
   	  break;        	 
   }
}

if($obj->matchPassword($password, $hash)) //match password by the hash
{
   echo "<br>YES, Matched";
}
else
{
   echo "<br>No, Wrong Password";
}
*/
?>