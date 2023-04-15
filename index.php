<?php
echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
echo '<script type="text/javascript">';
echo 'function zoom() {';
echo 'document.body.style.zoom = "140%"';
echo '}';
echo '</script>';
echo '';
echo '<body onload="zoom()">';
echo '<title>YacineTv Pc Code</title>';
echo '<link rel="icon" type="image/x-icon" href="/favicon.ico">';
echo '<style type="text/css">';
echo 'body {background-image: url("./bg.png") ;	font-family: "Verdana";}';
echo '#box { 
            background: whitesmoke; 
            width: 300px; 
            padding: 25px; margin-left: auto; 
            margin-right: auto; margin-top: 150px; 
            text-align: center;
            border: 2px solid rgb(157, 0, 0);
            color: rgb(157, 0, 0);
            border-radius: 6px;
            box-shadow: 0 8px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);}';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<div id="box"><img src="./Ylogo.png" alt="Smiley face" width="42" height="42" style="vertical-align:middle">';
echo 'YacineTv Pc Code<br><br>كود ياسين تيفي الخاص بك<br><br>';
$url = strtok($_SERVER['REQUEST_URI'], '');
$requred_string = substr(strrchr($url, '?='), 6);
echo $requred_string;
echo '';
echo '<script>';

echo '';
echo '</script>';
echo '</div>';
?>