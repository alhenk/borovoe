<?php
$current_date = date("d.m.Y");
$dt = date("H:i:s");
$current_time = date('H:i:s',strtotime("+2 hours", strtotime($dt)));

    // ���������� ����� XML
    header("Content-Type: text/xml");
    // ������� ��������� XML � ������� response
    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'; 
    echo ('<response>');
     echo('<variables>');

        echo('<timestamp>');
                echo($current_date);
        echo('</timestamp>');

        echo('<timestamp>');
                echo($current_time);
        echo('</timestamp>');

     echo('</variables>');
    // ��������� ������� response
    echo('</response>');

?>
