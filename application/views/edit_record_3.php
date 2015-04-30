<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit_record_3</title>
</head>

<body>

<?php

    
    include("SQL.php");

  	$recDate = $_POST['recDate'];
  	$roomID = $_POST['roomID'];
  	$memID = $_POST['memID'];
  	$payDay = $_POST['payDay'];
  	$checkinDate = $_POST['checkinDate'];
  	$checkoutDate = $_POST['checkoutDate'];




    $sql =  "UPDATE `record` SET recDate='".$recDate."',`roomID`='".$roomID."',`memID`='".$memID."',`payDay`='".$payDay."',`checkinDate`='".$checkinDate."',`checkoutDate`='".$checkoutDate."' WHERE recID='".$_SESSION["recID"]."'"; 
    //echo $sql;

    mysqli_query($con, $sql);
?>
</body>
