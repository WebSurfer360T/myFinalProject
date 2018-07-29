<?php
header('Content-Type: text/html; charset=utf-8');
?>

<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_quest_s = "localhost";
$database_quest_s = "quest_s";
$username_quest_s = "root";
$password_quest_s = "usbw";
$quest_s = mysql_pconnect($hostname_quest_s, $username_quest_s, $password_quest_s) or trigger_error(mysql_error(),E_USER_ERROR); 





?>