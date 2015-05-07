<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>get repairs_3</title>
</head>

<body>

<?php

    
    include("SQL.php");
	mysqli_query($con, 'SET CHARACTER SET utf8');
   
    $repCost = $_POST['repCost'];
    $rep_endTime = date ("Y-m-d");
    $sql =  "UPDATE `repairs` SET repCost='".$repCost."' , `rep_endTime`='".$rep_endTime."' WHERE repID='".$_SESSION["repID"]."'"; 
    //echo $sql;

    mysqli_query($con, $sql);
    redirect("welcome/cleaner");
?>
</body>
