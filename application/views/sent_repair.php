<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sent repairs</title>
</head>

<body>

<?php
include("SQL.php");
    
    $sql_1='SELECT `emp_Name`,`empID` FROM `employee` WHERE `title` = "cleaner"'; 
    $sql_2='SELECT `roomID` FROM `Room`'; 

        echo form_open('repair/sentRepair2');
        echo '選擇清潔或修繕員';
        echo '<select name="rep_getID">';
        $result_1 = mysqli_query($con, $sql_1); 
            if(mysqli_num_rows($result_1)>0){  
                while ($row = mysqli_fetch_object($result_1)){
                    $empID=$row->empID;
                    $emp_Name=$row->emp_Name;
                    echo '<option value="'.$empID.'">'.$empID.'</option>';
                }
            }
        echo '</select>';

        echo '</br>選擇房間';
        echo '<select name="roomID">';
        $result_2 = mysqli_query($con, $sql_2); 
            if(mysqli_num_rows($result_2)>0){  
                while ($row = mysqli_fetch_object($result_2)){
                    $roomID=$row->roomID;
                    echo '<option value="'.$roomID.'">'.$roomID.'</option>';
                }
            }
        echo '</select></br>';

        echo '需清潔或修繕部分</br><textarea name="repContent" style="width:400px;height:120px;"></textarea>';
    echo '<input type="submit" value="發送">';            
    //$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+6, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    //echo $datetime;

?>
</body>
