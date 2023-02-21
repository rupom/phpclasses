<?php
   /**
   * Usage of PathToXml Class
   * @PHPVER  :  5.0
   * @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
   * @version : 1.0
   * Purpose  : Creating XML File of Hierarchy Structure of A Given Directory
   */

     include_once "path_to_xml.class.php";
     
     $path = "d:/apache/htdocs/wordpress";
     
     //Path to Array
     $Obj = new PathToXml($path);
     $Obj->traverseDirFiles($path);
     $Obj->showDirHierarchy();

     //Array to XML
     $Obj->setArray($Obj->arr);     
     $xml_file = "test.xml"; 
     if ($Obj->saveArray($xml_file))
     {
        echo "<p><b>Array Converted To XML And Saved As $xml_file </b></p>";
     }

?>
