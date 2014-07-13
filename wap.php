<?php

  $data_expiration_symbol = "";
  $life_time = 300;
  $availible= is_readable("data.dat") && filesize("data.dat")<>0;
 
  if (!$availible)
    {
          if (!is_readable("backup.dat")) 
             { 
               $line1  = "*NA*";
               $line2  = "*NA*";
               $line3  = "*NA*";
               $line4  = "*NA*";
               $line5  = "*NA*";
               $line6  = "*NA*";
               $line7  = "*NA*";
               $line8  = "*NA*";
               $line9  = "*NA*";
               $line10 = "*NA*";
               $line11 = "*NA*";
               $line12 = "*NA*";
               $line13 = "*NA*";
               $line14 = "*NA*";
               $line15 = "*NA*";
               $line16 = "*NA*";
               $line17 = "*NA*";
               $line18 = "*NA*";
               $line19 = "*NA*";
               $line20 = "*NA*";
               $line21 = "*NA*";
               $line22 = "*NA*";
               $line23 = "*NA*";
               $line24 = "*NA*";
               $line25 = "*NA*";
               $line26 = "*NA*";
               $line27 = "*NA*";
               $line28 = "*NA*";
               $line29 = "*NA*";
               $line30 = "*NA*";
               $line31 = "*NA*";
               $line32 = "*NA*";
               $line33 = "*NA*";
               $line34 = "*NA*";
               $line35 = "*NA*";
               $line36 = "*NA*";
               $line37 = "*NA*";
               $line38 = "*NA*";
               $line39 = "*NA*";
               $line40 = "*NA*";
               $line41 = "*NA*";
               $line42 = "*NA*";
               $line43 = "*NA*";
               $line44 = "*NA*";
               $line45 = "*NA*";
               $line46 = "*NA*";
               $line47 = "*NA*";
               $line48 = "*NA*";
               $line49 = "*NA*";
               $line50 = "*NA*";
               $line51 = "*NA*";
               $line52 = "*NA*";
               $line53 = "*NA*";
               $line54 = "*NA*";
               $line55 = "*NA*";
               $line56 = "*NA*";
               $line57 = "*NA*";
               $line58 = "*NA*";
               $line59 = "*NA*";
               $line60 = "*NA*";
               $line61 = "*NA*";
               $line62 = "*NA*";
               $line63 = "*NA*";
               $line64 = "*NA*";

               $fres = fopen("backup.dat","w");
               fputs($fres, $line1."\r\n");
               fputs($fres, $line2."\r\n");
               fputs($fres, $line3."\r\n");
               fputs($fres, $line4."\r\n");
               fputs($fres, $line5."\r\n");
               fputs($fres, $line6."\r\n");
               fputs($fres, $line7."\r\n");
               fputs($fres, $line8."\r\n");
               fputs($fres, $line9."\r\n");
               fputs($fres, $line10."\r\n");
               fputs($fres, $line11."\r\n");
               fputs($fres, $line12."\r\n");
               fputs($fres, $line13."\r\n");
               fputs($fres, $line14."\r\n");
               fputs($fres, $line15."\r\n");
               fputs($fres, $line16."\r\n");
               fputs($fres, $line17."\r\n");
               fputs($fres, $line18."\r\n");
               fputs($fres, $line19."\r\n");
               fputs($fres, $line20."\r\n");
               fputs($fres, $line21."\r\n");
               fputs($fres, $line22."\r\n");
               fputs($fres, $line23."\r\n");
               fputs($fres, $line24."\r\n");
               fputs($fres, $line25."\r\n");
               fputs($fres, $line26."\r\n");
               fputs($fres, $line27."\r\n");
               fputs($fres, $line28."\r\n");
               fputs($fres, $line29."\r\n");
               fputs($fres, $line30."\r\n");
               fputs($fres, $line31."\r\n");
               fputs($fres, $line32."\r\n");
               fputs($fres, $line33."\r\n");
               fputs($fres, $line34."\r\n");
               fputs($fres, $line35."\r\n");
               fputs($fres, $line36."\r\n");
               fputs($fres, $line37."\r\n");
               fputs($fres, $line38."\r\n");
               fputs($fres, $line39."\r\n");
               fputs($fres, $line40."\r\n");
               fputs($fres, $line41."\r\n");
               fputs($fres, $line42."\r\n");
               fputs($fres, $line43."\r\n");
               fputs($fres, $line44."\r\n");
               fputs($fres, $line45."\r\n");
               fputs($fres, $line46."\r\n");
               fputs($fres, $line47."\r\n");
               fputs($fres, $line48."\r\n");
               fputs($fres, $line49."\r\n");
               fputs($fres, $line50."\r\n");
               fputs($fres, $line51."\r\n");
               fputs($fres, $line52."\r\n");
               fputs($fres, $line53."\r\n");
               fputs($fres, $line54."\r\n");
               fputs($fres, $line55."\r\n");
               fputs($fres, $line56."\r\n");
               fputs($fres, $line57."\r\n");
               fputs($fres, $line58."\r\n");
               fputs($fres, $line59."\r\n");
               fputs($fres, $line60."\r\n");
               fputs($fres, $line61."\r\n");
               fputs($fres, $line62."\r\n");
               fputs($fres, $line63."\r\n");
               fputs($fres, $line64."\r\n");
               fclose($fres); 
             }
             else
             {
               $fres   = fopen("backup.dat","r");
               $line1  = fgets($fres, 4096);
               $line2  = fgets($fres, 4096);
               $line3  = fgets($fres, 4096);
               $line4  = fgets($fres, 4096);
               $line5  = fgets($fres, 4096);
               $line6  = fgets($fres, 4096);
               $line7  = fgets($fres, 4096);
               $line8  = fgets($fres, 4096);
               $line9  = fgets($fres, 4096);
               $line10 = fgets($fres, 4096);
               $line11 = fgets($fres, 4096);
               $line12 = fgets($fres, 4096);
               $line13 = fgets($fres, 4096);
               $line14 = fgets($fres, 4096);
               $line15 = fgets($fres, 4096);
               $line16 = fgets($fres, 4096);
               $line17 = fgets($fres, 4096);
               $line18 = fgets($fres, 4096);
               $line19 = fgets($fres, 4096);
               $line20 = fgets($fres, 4096);
               $line21 = fgets($fres, 4096);
               $line22 = fgets($fres, 4096);
               $line23 = fgets($fres, 4096);
               $line24 = fgets($fres, 4096);
               $line25 = fgets($fres, 4096);
               $line26 = fgets($fres, 4096);
               $line27 = fgets($fres, 4096);
               $line28 = fgets($fres, 4096);
               $line29 = fgets($fres, 4096);
               $line30 = fgets($fres, 4096);
               $line31 = fgets($fres, 4096);
               $line32 = fgets($fres, 4096);
               $line33 = fgets($fres, 4096);
               $line34 = fgets($fres, 4096);
               $line35 = fgets($fres, 4096);
               $line36 = fgets($fres, 4096);
               $line37 = fgets($fres, 4096);
               $line38 = fgets($fres, 4096);
               $line39 = fgets($fres, 4096);
               $line40 = fgets($fres, 4096);
               $line41 = fgets($fres, 4096);
               $line42 = fgets($fres, 4096);
               $line43 = fgets($fres, 4096);
               $line44 = fgets($fres, 4096);
               $line45 = fgets($fres, 4096);
               $line46 = fgets($fres, 4096);
               $line47 = fgets($fres, 4096);
               $line48 = fgets($fres, 4096);
               $line49 = fgets($fres, 4096);
               $line50 = fgets($fres, 4096);
               $line51 = fgets($fres, 4096);
               $line52 = fgets($fres, 4096);
               $line53 = fgets($fres, 4096);
               $line54 = fgets($fres, 4096);
               $line55 = fgets($fres, 4096);
               $line56 = fgets($fres, 4096);
               $line57 = fgets($fres, 4096);
               $line58 = fgets($fres, 4096);
               $line59 = fgets($fres, 4096);
               $line60 = fgets($fres, 4096);
               $line61 = fgets($fres, 4096);
               $line62 = fgets($fres, 4096);
               $line63 = fgets($fres, 4096);
               $line64 = fgets($fres, 4096);
               fclose($fres);
             }
    }
    else
    {

      $file_attribute = stat("data.dat");
      $file_change_timestamp = $file_attribute[mtime];
      $right_now = time();
      $life_interval = $right_now - $file_change_timestamp;
      $data_expiration_symbol = "";

      if ($life_interval > $life_time)
          {
             $data_expiration_symbol="*";
          };

      $fmain = fopen("data.dat","r");
    
      $line1   = fgets($fmain, 4096);
      $line2   = fgets($fmain, 4096);
      $line3   = fgets($fmain, 4096);
      $line4   = fgets($fmain, 4096);
      $line5   = fgets($fmain, 4096);
      $line6   = fgets($fmain, 4096);
      $line7   = fgets($fmain, 4096);
      $line8   = fgets($fmain, 4096);
      $line9   = fgets($fmain, 4096);
      $line10  = fgets($fmain, 4096);
      $line11  = fgets($fmain, 4096);
      $line12  = fgets($fmain, 4096);
      $line13  = fgets($fmain, 4096);
      $line14  = fgets($fmain, 4096);
      $line15  = fgets($fmain, 4096);
      $line16  = fgets($fmain, 4096);
      $line17  = fgets($fmain, 4096);
      $line18  = fgets($fmain, 4096);
      $line19  = fgets($fmain, 4096);
      $line20  = fgets($fmain, 4096);
      $line21  = fgets($fmain, 4096);
      $line22  = fgets($fmain, 4096);
      $line23  = fgets($fmain, 4096);
      $line24  = fgets($fmain, 4096);
      $line25  = fgets($fmain, 4096);
      $line26  = fgets($fmain, 4096);
      $line27  = fgets($fmain, 4096);
      $line28  = fgets($fmain, 4096);
      $line29  = fgets($fmain, 4096);
      $line30  = fgets($fmain, 4096);
      $line31  = fgets($fmain, 4096);
      $line32  = fgets($fmain, 4096);
      $line33  = fgets($fmain, 4096);
      $line34  = fgets($fmain, 4096);
      $line35  = fgets($fmain, 4096);
      $line36  = fgets($fmain, 4096);
      $line37  = fgets($fmain, 4096);
      $line38  = fgets($fmain, 4096);
      $line39  = fgets($fmain, 4096);
      $line40  = fgets($fmain, 4096);
      $line41  = fgets($fmain, 4096);
      $line42  = fgets($fmain, 4096);
      $line43  = fgets($fmain, 4096);
      $line44  = fgets($fmain, 4096);
      $line45  = fgets($fmain, 4096);
      $line46  = fgets($fmain, 4096);
      $line47  = fgets($fmain, 4096);
      $line48  = fgets($fmain, 4096);
      $line49  = fgets($fmain, 4096);
      $line50  = fgets($fmain, 4096);
      $line51  = fgets($fmain, 4096);
      $line52  = fgets($fmain, 4096);
      $line53  = fgets($fmain, 4096);
      $line54  = fgets($fmain, 4096);
      $line55  = fgets($fmain, 4096);
      $line56  = fgets($fmain, 4096);
      $line57  = fgets($fmain, 4096);
      $line58  = fgets($fmain, 4096);
      $line59  = fgets($fmain, 4096);
      $line60  = fgets($fmain, 4096);
      $line61  = fgets($fmain, 4096);
      $line62  = fgets($fmain, 4096);
      $line63  = fgets($fmain, 4096);
      $line64  = fgets($fmain, 4096);
      fclose($fmain);

      $fres = fopen("backup.dat","w");
        fputs($fres, $line1);
        fputs($fres, $line2);
        fputs($fres, $line3);
        fputs($fres, $line4);
        fputs($fres, $line5);
        fputs($fres, $line6);
        fputs($fres, $line7);
        fputs($fres, $line8);
        fputs($fres, $line9);
        fputs($fres, $line10);
        fputs($fres, $line11);
        fputs($fres, $line12);
        fputs($fres, $line13);
        fputs($fres, $line14);
        fputs($fres, $line15);
        fputs($fres, $line16);
        fputs($fres, $line17);
        fputs($fres, $line18);
        fputs($fres, $line19);
        fputs($fres, $line20);
        fputs($fres, $line21);
        fputs($fres, $line22);
        fputs($fres, $line23);
        fputs($fres, $line24);
        fputs($fres, $line25);
        fputs($fres, $line26);
        fputs($fres, $line27);
        fputs($fres, $line28);
        fputs($fres, $line29);
        fputs($fres, $line30);
        fputs($fres, $line31);
        fputs($fres, $line32);
        fputs($fres, $line33);
        fputs($fres, $line34);
        fputs($fres, $line35);
        fputs($fres, $line36);
        fputs($fres, $line37);
        fputs($fres, $line38);
        fputs($fres, $line39);
        fputs($fres, $line40);
        fputs($fres, $line41);
        fputs($fres, $line42);
        fputs($fres, $line43);
        fputs($fres, $line44);
        fputs($fres, $line45);
        fputs($fres, $line46);
        fputs($fres, $line47);
        fputs($fres, $line48);
        fputs($fres, $line49);
        fputs($fres, $line50);
        fputs($fres, $line51);
        fputs($fres, $line52);
        fputs($fres, $line53);
        fputs($fres, $line54);
        fputs($fres, $line55);
        fputs($fres, $line56);
        fputs($fres, $line57);
        fputs($fres, $line58);
        fputs($fres, $line59);
        fputs($fres, $line60);
        fputs($fres, $line61);
        fputs($fres, $line62);
        fputs($fres, $line63);
        fputs($fres, $line64);
      fclose($fres);
    }

$current_date = date("d.m.Y");
$current_time = date("H.i.s");


header ( "content-type: text/vnd.wap.wml" );

echo '<?xml version="1.0" encoding="utf-8"?>';

echo '<!doctype wml public "-//wapforum//dtd wml 1.1//en"
"http://www.wapforum.org/dtd/wml_1.1.xml">';

echo '
      <wml>

      <card id="MAIN" title="TNU INFO">
      <p>';

      echo $current_date;
      echo '  ';
      echo $current_time;
      echo '<br/>';

      echo 'T1 =';
      echo $data_expiration_symbol.$line40;
      echo '<br/>';

      echo 'T2 =';
      echo $data_expiration_symbol.$line41;
      echo '<br/>';

      echo 'T3 =';
      echo $data_expiration_symbol.$line55;
      echo '<br/>';

      echo 'T4 =';
      echo $data_expiration_symbol.$line56;
      echo '<br/>';

      echo 'T5 =';
      echo $data_expiration_symbol.$line58;
      echo '<br/>';

      echo 'U  =';
      echo $data_expiration_symbol.$line22;
      echo '<br/>';

      echo 'I =';
      echo $data_expiration_symbol.$line23;
      echo '<br/>';

      echo 'ALARM =';
      echo $data_expiration_symbol.$line42;
      echo '<br/>';

echo '<a href="#COUNTERS">Go to POWER METERS</a><br/>';
echo '<a href="#DIAGNOSTICS">Go to DIAGNOSTICS</a><br/>';

echo'
      </p>
      </card>';


echo '<card id="COUNTERS" title="POWER METERS">
      <p>';

      echo 'We =';
      echo $data_expiration_symbol.$line16;
      echo ' kWh <br/>';

      echo 'Wt =';
      echo $data_expiration_symbol.$line48;
      echo ' Gcal <br/>';

echo '<a href="#MAIN">Go to TNU INFO</a><br/>';

echo '
      </p>
      </card>';

echo '<card id="DIAGNOSTICS" title="DIAGNOSTICS">
      <p>';

      echo 'FILE_DATE';
      echo '<br/>';
      echo $data_expiration_symbol.$line1;
      echo '<br/>';

      echo 'CURRENT_RECCORD';
      echo '<br/>';
      echo $data_expiration_symbol.$line2;
      echo '<br/>';

echo '<a href="#MAIN">Go to TNU INFO</a><br/>';


echo '
      </p>
      </card>
      </wml>';

?>