<?php

/**
* Author   : MA Razzaque Rupom (rupom_315@yahoo.com, rupom.bd@gmail.com)
* Version  : 1.0
* Date     : 19 Feb, 2006
* Purpose  : Deleting Files of Specific Extension from Specific Directory Path
* Released : Under GPL
*/

class fileDel
{	 
	 var $extension;
	 
   /** 
   *   @purpose: Sets path and extension
   *   @params : path, file extension to delete
   *   @return none
   */
   
   function fileDel($extension)
   {
      $this->extension = $extension;	
   }//End of function
   
   /** 
   *   @purpose: Recursively deleting files
   *   @params : path to execute
   *   @return : none
   */
   
   function delDirFiles ($path)
   {
      $dir = opendir ($path);
      
      while ($file = readdir($dir)) 
      {
         if (($file == ".") or ($file == ".."))
         {
            continue;
         }                
		     	
		     if (filetype ("$path/$file") == "dir")
		     {		     	
            $this->delDirFiles("$path/$file");
         }                
         //whether file of desired extension is found
				 elseif($this->findExtension($file)==$this->extension)
				 {				 	  
            if(@unlink ("$path/$file"))
            {
               echo "$path/$file >> <b>Deleted</b><br>";
            }   
         }               	 

      } //End of while
      closedir($dir);
         
   }//End of function

   /** 
   *   @purpose: Finding extension of a file
   *   @params : filename
   *   @return : extension
   */
   function findExtension($file)
   {
      return array_pop(explode(".", $file));
   }//End of function

} //End of class

?>
