<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sent repairs_2</title>
</head>

<body>

<?php
    
    include("SQL.php");
    
    $rep_sentID = $_SESSION['empID'];//暫定為2

    $rep_getID = $_POST['rep_getID'];
    $roomID = $_POST['roomID'];
    $repContent = $_POST['repContent'];
    $rep_submitTime = date ("Y-m-d H:i:s" , mktime(date('H')+6, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    $sql='INSERT INTO `repairs`(`rep_sentID`,`rep_getID`,`roomID`,`repContent`,`rep_submitTime`) VALUES ("'.$rep_sentID.'","'.$rep_getID.'", "'.$roomID.'", "'.$repContent.'","'.$rep_submitTime.'")';
    mysqli_query($con, $sql);
?>
</body>
