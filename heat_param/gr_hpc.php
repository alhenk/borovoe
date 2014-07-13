<?

include ( "../jpgraph/src/jpgraph.php");
include ("../jpgraph/src/jpgraph_line.php");


//********************************************************************************
// Part with SQL request
//********************************************************************************

include "../blocks/database_access.php";

 
$link = mysql_connect(HOST,USER,PASS) or die (mysql_error());
        mysql_select_db(DB,$link);
        mysql_query ("SET NAMES utf8");
        mysql_query ("set character_set_client='utf8'");
        mysql_query ("set character_set_results='utf8'");
        mysql_query ("set collation_connection='utf8_general_ci'");

$result = mysql_query("SELECT * FROM $tbl_name WHERE '2011-05-05' < date", $link);
//$result = mysql_query("SELECT * FROM $tbl_name WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY) < date", $link);
//$sql= "SELECT * FROM $tbl_name WHERE DATE_SUB(CURDATE(),INTERVAL 1 DAY) < date"
//$result = mysql_query($sql,$link) or die(mysql_error()."<br/>".$sql);
//echo mysql_error();

$i=0;
while ($myrow = mysql_fetch_array($result))
  {
//  echo "Date = ".$myrow["date"]."   T-ambient = ".$myrow["t_amb"]."<br>";
   $gettime=$myrow["date"];
   list($edate, $etime) = split(' ', $gettime);
   list($ehour, $emin)  = split(':', $etime);
   
   $xdata[$i] = $ehour.":".$emin;
   $ydata_1[$i] = $myrow["t_forward"];
   $ydata_2[$i] = $myrow["t_return"];
   $i++;
  }

//********************************************************************************

//********************************************************************************
// For debugin only
//********************************************************************************
/*
$rval_1 = rand(1.0,4.8);
$rval_2 = rand(1.0,4.8);
$rval_3 = rand(1.0,4.8);
$rval_4 = rand(1.0,4.8);
$rval_5 = rand(1.0,4.8);
$rval_6 = rand(1.0,4.8);
$rval_7 = rand(1.0,4.8);
$rval_8 = rand(1.0,4.8);

$rval_11 = rand(1.0,4.8);
$rval_12 = rand(1.0,4.8);
$rval_13 = rand(1.0,4.8);
$rval_14 = rand(1.0,4.8);
$rval_15 = rand(1.0,4.8);
$rval_16 = rand(1.0,4.8);
$rval_17 = rand(1.0,4.8);
$rval_18 = rand(1.0,4.8);

$xdata = array("12:00", "12:05", "12:10", "12:15", "12:20", "12:25", "12:30", "12:35");
$ydata_1 = array($rval_1, $rval_2, $rval_3, $rval_4, $rval_5, $rval_6, $rval_7, $rval_8);
$ydata_2 = array($rval_11, $rval_12, $rval_13, $rval_14, $rval_15, $rval_16, $rval_17, $rval_18);
//********************************************************************************
*/

$graph = new Graph(685,180,"auto");
$graph->SetScale("textlin");
$graph->SetShadow(true, 3, array(222,222,222));


//$graph->title->Set('ÒÅÌÏÅÐÀÒÓÐÀ');
//$graph->title->SetFont(FF_TIMES, FS_BOLD, 12);
$graph->title->SetMargin(20);
$graph->SetMarginColor('white'); //'#eee'
$graph->SetFrame(true,'#008080', 1); /*'#B3BCCB'*/
$graph->SetTickDensity(TICKD_DENSE);
$graph->img->SetMargin(50,20,20,60);
$graph->title->SetMargin(10);

$graph->xaxis->title->margin = 25;
$graph->yaxis->title->margin = 25;
$graph->xaxis->SetTickLabels($xdata);
$graph->xaxis->SetLabelAngle(90);
$graph->ygrid->Show(true);
$graph->xgrid->Show(true);
$graph->ygrid->SetFill(true, '#EFEFEF@0.5','#BBCCFF@0.5');

$my_interval = ceil(sizeof($xdata)/24);
$graph->xaxis->SetTextTickInterval($my_interval);

$lineplot_1=new LinePlot($ydata_1);
$lineplot_1->SetColor('red');
$lineplot_1->SetWeight(2);
//$lineplot_1->SetLegend('ÏÐßÌ');

$lineplot_2=new LinePlot($ydata_2);
$lineplot_2->SetColor('blue');
$lineplot_2->SetWeight(2);
//$lineplot_2->SetLegend('ÎÁÐÀÒ');

//$graph->img->SetMargin(40, 120, 20, 40);

//$graph->legend->Pos(0.01, 0.4, 'right', 'center');
//$graph->legend->SetFont(FF_ARIAL, FS_NORMAL, 9);

$graph->yaxis->scale->SetGrace(10);

$graph->add($lineplot_1);
$graph->add($lineplot_2);
$graph->Stroke();

?>
