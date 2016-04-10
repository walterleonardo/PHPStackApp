<?php
date_default_timezone_set("Europe/Madrid");
$remote = $_SERVER['REMOTE_ADDR'];
$forwarded = $_SERVER['HTTP_X_FORWARDED_FOR'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHPStackApp</title>
    </head>
    <body>
    <center>
        <h1>This is a webpage that show an APP with PHP</h1>
        <img src="wadisaquienes.png" width="200" height="180" alt="Quienes somos?">
        <h4><?php
echo "Hoy es <b>" . date("l") ." ". date("d-m-Y") . "</b><br>";
echo "El hostname es  <b>".gethostname(). "</b><br>";
echo 'Versión actual de PHP:  <b>' . phpversion(). "</b><br><br><br>";
echo 'Su ip es:  <b>' . $remote. "</b><br>";
echo 'Su navegador es:  <b>'.$_SERVER['HTTP_USER_AGENT'] . "</b><br><br>\n\n";
?></h4>
        
        <?php
        // put your code here
        ?>
        
    </center>
    </body>
</html>
