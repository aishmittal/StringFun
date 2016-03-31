<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db_name='aish';
     if( !@mysql_connect($host,$user,$pass) || !@mysql_select_db($db_name) ){
		die(mysql_error());
	 }
	 
?>