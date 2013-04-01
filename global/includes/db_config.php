<?php
	$c_username = "root";
	$c_password = "";
	$c_host = "127.0.0.1";
	$c_database = "ZeusPanel";


	$dbconnection = mysql_connect($c_host, $c_username, $c_password);
	if(!$dbconnection)
		die ("Error: ZeusPanel cannot contact the MySQL Server. Please contact the site administrator.");

	$dbselection = mysql_select_db($c_database);
	if(!$dbselection)
		die ("Error: ZeusPanel cannot contact the MySQL Database. Please contact the site administrator.");
?>