<?php

/**
* Author   : MA Razzaque Rupom (rupom_315@yahoo.com, rupom.bd@gmail.com)
* Version  : 1.0
* Date     : 19 Feb, 2006
* Purpose  : Deleting Files of Specific Extension from Specific Directory Path
* Released : Under GPL
*/

require_once "file_del.class.php";

$path = "/your/desired/path/to/delete_from";
$ext  = "desired_ext";

$delObj = new fileDel($ext);

$delObj->delDirFiles($path);  

?>