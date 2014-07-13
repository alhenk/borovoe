<?php
  $data_expiration_symbol = "";
  $life_time = 300;
  $par_length=64;
  $main_file = "../data.dat";
  $backup_file = "../backup.dat";
  
  $availible= is_readable($main_file) && filesize($main_file)<>0;

  if (!$availible)
    {
         if (!is_readable($backup_file)) 
             { 
                for ($i=1;$i<=$par_length;$i++)
                  {
                      $line[$i] = "*NA*";
                  };
                $fres = fopen($backup_file,"w+");
			    for ($i=1;$i<=$par_length;$i++)
                  {
                      fputs($fres, $line[$i]."\r\n");
                  };
                fclose($fres); 
            }
            else
            {
               $file_attribute = stat($backup_file);
               $file_change_timestamp = $file_attribute[mtime];
               $right_now = time();
               $life_interval = $right_now - $file_change_timestamp;
               $data_expiration_symbol = "";

               if ($life_interval > $life_time)
                   {
                     $data_expiration_symbol="*";
                   };

               $fres   = fopen($backup_file,"r");
			     for ($i=1;$i<=$par_length;$i++)
                  {
                      $line[$i] = fgets($fres, 4096);
                  };
               fclose($fres);
             }
    }
    else
    {
      $file_attribute = stat($main_file);
      $file_change_timestamp = $file_attribute[mtime];
      $right_now = time();
      $life_interval = $right_now - $file_change_timestamp;
      $data_expiration_symbol = "";

      if ($life_interval > $life_time)
          {
             $data_expiration_symbol="*";
          };

      $fmain = fopen($main_file,"r");
      for ($i=1;$i<=$par_length;$i++)
        {
           $line[$i] = fgets($fmain, 4096);
        };
      fclose($fmain);

      $fres = fopen($backup_file,"w+");
	  for ($i=1;$i<=$par_length;$i++)
        {
           fputs($fres, $line[$i]);
        };
      fclose($fres);
    }

$current_date = date("d.m.Y");
$dt = date("H:i:s");
$current_time = date('H:i:s',strtotime("+2 hours", strtotime($dt)));

    // возвращать будем XML
    header("Content-Type: text/xml");
    // создаем заголовок XML и элемент response
    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'; 
    echo ('<response>');
     echo('<variables>');

        echo('<timestamp>');
                echo($current_date);
        echo('</timestamp>');

        echo('<timestamp>');
                echo($current_time);
        echo('</timestamp>');

        echo('<variable>');
            echo('<name>');
               echo("Pavg");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol."8,2"); //$line13
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("Qavg");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[14]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("Fsys");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[15]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("W51_ad");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[16]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("Uavg");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[22]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("Iavg");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[23]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("t1TB1");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[40]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("t2TB1");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[41]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("NSTB1");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[42]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("Qo");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[48]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("t3");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[55]);
            echo('</value>');
        echo('</variable>');

        echo('<variable>');
            echo('<name>');
               echo("t4");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[56]);
            echo('</value>');
        echo('</variable>');


        echo('<variable>');
            echo('<name>');
               echo("Tamb");
            echo('</name>');

            echo('<value>');
               echo($data_expiration_symbol.$line[58]);
            echo('</value>');
        echo('</variable>');
 
     echo('</variables>');
    // закрываем элемент response
    echo('</response>');

?>
