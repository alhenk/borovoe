<?php 
$par_length=64;
$main_file_name   = "data.dat";
$backup_file_name = "backup.dat";

//include "/blocks/database_access.php";
$tbl_name = "tnu_tab";

$db_server="localhost";
$db_username="digel_kbiz";
$db_password="yehbruhttwj";
$db_name="digel_kbiz";

$data_ready=TRUE;
for ($i=1;$i<=$par_length;$i++)
  {
    $parameter_name= "V".(sprintf("%02d",$i));
//  echo "$parameter_name = ";
    if (!empty($_POST["$parameter_name"]))
	  {
        $line[$i]=$_POST["$parameter_name"];
//      echo "$line[$i]<br>";
	  }
	  else
	  {
	    $data_ready=FALSE;
	  }
  }
if ($data_ready)
 {
   echo "<br>DATA TRANSFER SUCCESS";
   $availible= is_writable($main_file_name);
   if ($availible)
    {
       $fmain = fopen($main_file_name,"w+");
	   for ($i=1;$i<=$par_length;$i++)
         {
		   fputs($fmain, $line[$i]);
//  	   echo "<br>$line[$i]";
		 }
	   fclose($fmain);
       echo "<br> AND MAIN FILE RECORD SUCCESS";
       $db = mysql_connect($db_server,$db_username,$db_password);
       mysql_select_db($db_name,$db);
	   $dt=date('Y-m-d H:i:s');
           $dt = date('Y-m-d H:i:s', strtotime("+2 hours", strtotime($dt)));

$result = mysql_query("INSERT INTO $tbl_name (date,frequency,voltage,current,e_active,e_thermal,t_forward,t_return,t_inlet,t_outlet,t_amb)        VALUES ('$dt','$line[15]','$line[22]','$line[23]','$line[16]','$line[48]','$line[40]','$line[41]','$line[55]','$line[56]','$line[58]')" );
	   echo mysql_error();
       if ($result == 'true') 
	   {
	   echo "<br> MYSQL SUCCESS";
	   }
    }
	else
	{
	   $availible= is_writable($backup_file_name);
       if ($availible)
        {
          $fback = fopen($backup_file_name,"w+");
	      for ($i=1;$i<=$par_length;$i++)
		    {
		      fputs($fback, $line[$i]);
//		      echo "<br>$line[$i]";
		    }
		  fclose($fback);
		  echo "<br> AND BACKUP FILE RECORD SUCCESS";
	      $db = mysql_connect($db_server,$db_username,$db_password);
          mysql_select_db($db_name,$db);
		  $dt=date('Y-m-d H:i:s');
                  $dt = date('Y-m-d H:i:s', strtotime("+2 hours", strtotime($dt)));

          $result = mysql_query("INSERT INTO $tbl_name (date,frequency,voltage,current,e_active,e_thermal,t_forward,t_return,t_inlet,t_outlet,t_amb)        VALUES ('$dt','$line[15]','$line[22]','$line[23]','$line[16]','$line[52]','$line[40]','$line[41]','$line[55]','$line[56]','$line[58]')" );
	      echo mysql_error();
	    }
    }
 }
 else
 {
   echo "DATA TRANSFER ERROR";
 }
   
?>

