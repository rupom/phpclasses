<?php
/**
* EasyCalendar Class
*
* @author  :  Md Abdur Razzaque Rupom (aka Rupom Razzaque) <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/)
*             URL: https://rupom.wordpress.com  
* @version :  1.0
* Purpose  :  Creating Year and Month Calendar Easily By Unix System Call
*/

class EasyCalendar
{
   /**
   * Outputs calendar of a given year
   * @param $year
   * @return none
   */
   function getYearCalendar($year)
   {
   	  $year  = trim($year);
      $year  = preg_match("/[0-9]{4}/", $year) ? $year : die("Bad Year Value");
      
      echo "<table align=center cellspacing=5>";
      echo "<tr>";
      
      for($month = 1; $month <=12; $month++)
      {
      	 echo "<td>";
         $result = array();         
         exec("cal $month $year", $result);
         $this->showResult($result);
         echo "</td>";
         
         echo "<td>&nbsp;</td>";
         
         if($month%4==0)
      	  {
      	     echo "</tr>";
      	     echo "<tr>";	
      	  }
      }//EO for
      
      echo "</tr>";
      echo "</table>";
      
   }//EOFn
   
   /**
   * Outputs calendar of a given month of a given year
   * @param $year, $month
   * @return none
   */
   function getMonthCalendar($year, $month)
   {
      $year   = trim($year);
      $month  = trim($month);      
      $year   = preg_match("/[0-9]{4}/", $year) ? $year : die("Bad Year Value");
      $month  = preg_match("/[0-9]{1,2}/", $month) ? $month : die("Bad Month Value");
      
      echo "<table align=center cellspacing=5>";
      echo "<tr>";   
      echo "<td>";
      
      $result = array();   
      exec("cal $month $year", $result);
      $this->showResult($result);
      
      echo "</td>";                     
      echo "</tr>";
      echo "</table>";
      
   }//EOFn
   
   /**
   * Outputs calendar result array
   * @param $result array
   * @return none
   */
   function showResult($result)
   {
      print "<PRE>";
      
      foreach ($result as $i=>$value) 
      { 
         echo "$value<BR>"; 
      }
      
      print "</PRE>";
   }

}//EO Class

?>