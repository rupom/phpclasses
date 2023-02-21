<?php

/**
* PathToXml Class
*
* @PHPVER  :  5.0
* @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/)
*             URL: https://rupom.wordpress.com  
* @version :  1.0
* Purpose  :  Creating XML File of Hierarchy Structure of A Given Directory
*/

include_once("class.array2xml2array.php");

class PathToXml extends CArray2xml2array
{
public $arr;
private $mainString;
private $path;

/**
* Constructor
* @access public
* @param $path
*/

public function __construct($path)
{
   $this->arr = array();
   $this->mainString = "";
   $this->path = $path;

}

/**
* Traverses Files in Directory
* @param $path to traverse
* @return none
*/
public function traverseDirFiles($path)
{
      $dir = opendir ($path);

      while ($file = readdir ($dir))
      {
         if ($file == '.' || $file == '..')
         {
            continue;
         }

         if (filetype("$path/$file") == "dir")
         {
            $this->traverseDirFiles("$path/$file");
         }
         else
         {
            $this->processFiles($path,$file);
         }
      } //End of while

      closedir($dir);

   }//End of function
   
   /**
   * Put $file to path array
   * @param $path, $file
   * @return none
   */
   function processFiles($path, $file)
   {

     if(trim($path) == trim($this->path))
     {
        $arr_to_form = 'this->arr[pathRoot]';
     }
     else
     {
         $dat         = $this->formArray($this->path.$path);
         $arr_to_form = 'this->arr[pathRoot]'.$dat;

     }

     $searches = array("[","]");
     $reps     = array("['", "']");
     $arr_2    = str_replace($searches, $reps, trim($arr_to_form));
      

     $vr = $arr_2.'[]';

     //assigns $file to array "$arr"
     eval("\$$vr=\"$file\";");


   }//EOFn
   
   /**
   * Shows files and directories in a hierarchical structure from the given directory
   * @return none
   */
   public function showDirHierarchy()
   {
      $this->dBug($this->arr);
   }
   
   /**
   * For Debuging/displaying purpose
   * @param data to debug
   * @return none
   **/
   function dBug($dump)
   {
      echo "<pre>";
      print_r($dump);
      echo "</pre>";
   }
   
   /**
   * Forms path array from path string 
   * @param path string
   * @return path array
   **/
   function formArray($str)
   {
       $arr = explode("$this->path/",$str);

       $arr = explode("/",$arr[1]);

       foreach($arr as $i=>$v)
       {
          $arr_to_form .= "[$v]";
       }
       
       return $arr_to_form;
   }


}//EO Class
?>