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
    
    $sql_1='SELECT `empName`,`empID` FROM `employee` WHERE `title` = "cleaner"'; 
    $sql_2='SELECT `roomID` FROM `Room`'; 
    
    echo '<form method="POST" action="sent_repair_2.php">';
        echo '選擇清潔或修繕員';
        echo '<select name="rep_getID">';
        $result_1 = mysql_query($sql_1); 
            if(mysql_num_rows($result_1)>0){  
                while ($row = mysql_fetch_object($result_1)){
                    $empID=$row->empID;
                    $empName=$row->empName;
                    echo '<option value="'.$empID.''.$empName.'">'.$empID.''.$empName.'</option>';
                }
            }
        echo '</select>';

        echo '</br>選擇房間';
        echo '<select name="roomID">';
        $result_2 = mysql_query($sql_2); 
            if(mysql_num_rows($result_2)>0){  
                while ($row = mysql_fetch_object($result_2)){
                    $roomID=$row->roomID;
                    echo '<option value="'.$roomID.'">'.$roomID.'</option>';
                }
            }
        echo '</select></br>';

        echo '需清潔或修繕部分</br><textarea name="repContent" style="width:400px;height:120px;"></textarea>';
    echo '<input type="submit" value="發送">';            
    echo '</form>'; 
    //$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+6, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    //echo $datetime;

?>
</body>