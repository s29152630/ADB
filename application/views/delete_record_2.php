<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete_record</title>
</head>

<body>

<?php
include("SQL.php");
    
    $recID = $_POST['recID'];
    $sql='DELETE FROM `record` WHERE `recID`="'.$recID.'"';
    $sql_1='DELETE FROM `bookingdate` WHERE `recID`="'.$recID.'"';

    mysqli_query($con, $sql);
    mysqli_query($con, $sql_1);
    redirect('/room/deleteRecord');

?>

</body>
