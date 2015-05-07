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
    mysqli_query($con, 'SET CHARACTER SET utf8');
    
    $rep_sentID = $_SESSION['empID'];

    $rep_getID = $_POST['rep_getID'];
    $roomID = $_POST['roomID'];
    $repContent = $_POST['repContent'];
    $rep_submitTime = date ("Y-m-d");
    $sql='INSERT INTO `repairs`(`rep_sentID`,`rep_getID`,`roomID`,`repContent`,`rep_submitTime`) VALUES ("'.$rep_sentID.'","'.$rep_getID.'", "'.$roomID.'", "'.$repContent.'","'.$rep_submitTime.'")';
    //var_dump($sql);
    mysqli_query($con, $sql);
    redirect("welcome/counter");
?>
</body>
