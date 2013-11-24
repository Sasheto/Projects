<?php
$connect_error='Sorry ACCES DENIED!';
mysql_connect('localhost','root','sa6konts124')or die($connect_error);
mysql_select_db('userlogin') or die($connect_error);
?>