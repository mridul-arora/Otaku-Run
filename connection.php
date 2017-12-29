<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="code1";
$conn=mysql_connect($servername,$dbusername,$dbpassword,$dbname);
$sql=mysql_select_db(conn,"code1");
?>
