<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit_record</title>
</head>

<body>

<?php
include("SQL.php");
    
    $sql_1='SELECT `roomID`,`checkinDate`,`checkoutDate`,`recID`,`recDate` FROM `record`'; 

    echo form_open('repair/editRecord2');
        echo '<select name="recID">';
        $result_1 = mysqli_query($con, $sql_1); 
            if(mysqli_num_rows($result_1)>0){  
                while ($row = mysqli_fetch_object($result_1)){
                    $roomID=$row->roomID;
                    $recID=$row->recID;
                    $recDate=$row->recDate;
                    $checkinDate=$row->checkinDate;
                    $checkoutDate=$row->checkoutDate;
                    echo '<option value="'.$recID.'">房號'.$roomID.',訂房時間'.$recDate.',入住時間'.$checkinDate.',退房時間'.$checkoutDate.'</option>';
                }
            }
        echo '</select>';

    echo '<input type="submit" value="修改">';            




?>
</body>
