<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>complete repairs</title>
</head>

<body>

<?php
include("SQL.php");
    
    $rep_sentID = $_SESSION['empID'];//暫定為1
    $_SESSION["rep_sentID"] = $rep_sentID;
    $sql_1='SELECT `repID`,`rep_submitTime` FROM `repairs` WHERE `rep_endTime` is not null AND `rep_sentID` = "'.$_SESSION["rep_sentID"].'" '; 
    echo form_open('repair/completeRepairSuccess');
        echo '查看已完成的修繕單';
        echo '<select name="repID">';
        $result_1 = mysqli_query($con, $sql_1); 
            if(mysqli_num_rows($result_1)>0){  
                while ($row = mysqli_fetch_object($result_1)){
                    $repID=$row->repID;
                    $rep_submitTime=$row->rep_submitTime;
                    echo '<option value="'.$repID.'">單號'.$repID.'時間'.$rep_submitTime.'</option>';
                }
            }
        echo '</select>';

    echo '<input type="submit" value="發送">';            
    echo '</form>'; 

?>
</body>
