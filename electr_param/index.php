<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
		<title>ТЕПЛОНАСОСНАЯ УСТАНОВКА</title>
		<link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/text.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/960.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../css/grid.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../css/nav.css" media="screen" />
        <script type="text/javascript" src="../js/ajax_electr_param.js"></script>
	</head>
	<body>
    
    <script src="../js/jquery.js"></script>
    <script>
      $("a").addClass("test");
      $(document).ready(function()
          {
              window.setInterval(function()
                {
	              $('#electr_volt').attr('src', 'gr_volt.php');
				  $('#electr_curr').attr('src', 'gr_curr.php');
				  $('#electr_freq').attr('src', 'gr_freq.php');
				  $('#temp_amb').attr('src', 'gr_tamb.php');
                }, 120000);
          });
    </script>      
    
   <div class="container_16">
			<div class="grid_16">
				<h1 id="branding">
					<a href="">ТЕПЛОНАСОСНАЯ УСТАНОВКА</a>
				</h1>
			</div>
            <?php include "../blocks/navigation_main.php";  ?>
            <div class="clear"></div>

            <div class="grid_16">
			    <h2 id="page-heading">МОНИТОРИНГ ЭЛЕКТРИЧЕСКИХ ПАРАМЕТРОВ</h2>
	        </div>
            <div class="clear"></div>
            <div class="grid_1">
                 <div id="current_date">???</div>
 			</div>
            <div class="grid_1">
                 <div id="current_time">???</div>
		    </div>
       <div class="clear"></div>
        
        
       <div class="grid_10">
         <div class="box">
            <h2>НАПРЯЖЕНИЕ СЕТИ</h2>
              <div class="block">
                <div id="info" style="height:190px;">
                <img id="electr_volt" src="gr_volt.php">
                </div>
              </div>
         </div>
       </div>
       
       <div class="grid_6">
       <div class="box">
           <h2>ТЕКУЩИЕ ПАРАМЕТРЫ</h2>
             <div class="block">
               <div id="info" style="height:190px;">
                 <table width="200" border="1">
                   <tr>
                      <td>Напряжение сети</td>
                      <td><div id="Uavg">???</div></td>
                   </tr>
                 </table>
               </div>
            </div>
         </div>
       </div> 
       
       
        <div class="grid_10">
         <div class="box">
            <h2>ТОК НАГРУЗКИ</h2>
              <div class="block">
                <div id="info" style="height:190px;">
                <img id="electr_curr" src="gr_curr.php">
                </div>
              </div>
         </div>
       </div>
       
       <div class="grid_6">
       <div class="box">
           <h2>ТЕКУЩИЕ ПАРАМЕТРЫ</h2>
             <div class="block">
               <div id="info" style="height:190px;">
                 <table width="200" border="1">
                   <tr>
                      <td>Ток нагрузки</td>
                      <td><div id="Iavg">???</div></td>
                   </tr>
                 </table>
               </div>
            </div>
         </div>
       </div>   
        
       <div class="grid_10">
         <div class="box">
            <h2>ЧАСТОТА СЕТИ</h2>
              <div class="block">
                <div id="info" style="height:190px;">
                <img id="electr_freq" src="gr_freq.php">
                </div>
              </div>
         </div>
       </div>
       
       <div class="grid_6">
       <div class="box">
           <h2>ТЕКУЩИЕ ПАРАМЕТРЫ</h2>
             <div class="block">
               <div id="info" style="height:190px;">
                 <table width="200" border="1">
                   <tr>
                      <td>Частота сети</td>
                      <td><div id="Fsys">???</div></td>
                   </tr>
                 </table>
               </div>
            </div>
         </div>
       </div>   
  
        <div class="clear"></div>    
       <div class="grid_10">
         <div class="box">
            <h2>ТЕМПЕРАТУРА ОКРУЖАЮЩЕЙ СРЕДЫ</h2>
              <div class="block">
                <div id="info" style="height:190px;">
                <img id="temp_amb" src="gr_tamb.php">
                </div>
              </div>
         </div>
       </div>
       
       <div class="grid_6">
       <div class="box">
           <h2>ТЕКУЩИЕ ПАРАМЕТРЫ</h2>
             <div class="block">
               <div id="info" style="height:190px;">
                 <table width="200" border="1">
                   <tr>
                      <td>Температура окружающей среды</td>
                      <td><div id="Tamb">???</div></td>
                   </tr>
                 </table>
               </div>
            </div>
         </div>
       </div> 
 
 
 
        
 
 
       <div class="clear"></div>    
       <?php include "../blocks/footer.php";  ?>
       <div class="clear"></div>
	</div>

	</body>
</html>