﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<?php
	$dbServer="localhost";
	$dbName="project2";
	$dbUser="root";
	$dbPass="8147";
	$con = mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
	if (!$con) die("資料連結失敗！");
	// $link=mysqli_connect($dbServer, $dbUser, $dbPass);
	// mysqli_select_db($dbName, $link);
	// mysqli_query("SET NAMES 'utf8'");        
	
	// if(!@mysqli_connect($dbServer, $dbUser, $dbPass))
	// 	die("無法連結資料庫，請聯絡系統管理員".mysqli_error());
	// if(!@mysqli_select_db($dbName))
	// 	die("無法使用資料庫");
?>


</body>
</html>