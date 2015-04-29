<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit_record_2</title>
</head>

<body>

<?php
    include("SQL.php");
    $recID = $_POST['recID'];
    $_SESSION["recID"] = $recID;
    
     
    $sql_1 = 'SELECT `recDate`,`roomID`,`memID`,`payDay`,`checkinDate`,`checkoutDate` FROM `record` WHERE `recID` = "'.$_SESSION["recID"].'" '; 
    
    $result_1 = mysql_query($sql_1); 
    if(mysql_num_rows($result_1)>0){  
        while ($row = mysql_fetch_object($result_1)){
            $recDate=$row->recDate;
            $roomID=$row->roomID;
            $memID=$row->memID;
            $payDay=$row->payDay;
            $checkinDate=$row->checkinDate;
            $checkoutDate=$row->checkoutDate;
        }
    }

    echo '<form method="POST" action="edit_record_3.php">';
            echo '訂房時間:<input type="text" name="recDate" value="'.$recDate.'" ></br>';
            echo '房號:<input type="text" name="roomID" value="'.$roomID.'"></br>';
            echo '會員ID:<input type="text" name="memID" value="'.$memID.'"></br>';
            echo '付款時間:<input type="text" name="payDay" value="'.$payDay.'"></br>';
            echo '入住時間:<input type="text" name="checkinDate" value="'.$checkinDate.'"></br>';
            echo '退房時間:<input type="text" name="checkoutDate" value="'.$checkoutDate.'"></br>';        
    echo '<input type="submit" value="修改">';            
    echo '</form>'; 






?>
</body>
