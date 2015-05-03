<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>gets repairs</title>
</head>

<body>

<?php
include("SQL.php");
    
    
	$rep_getID = $_SESSION['empID'];//暫定為1

    $sql_1 = 'SELECT `repID`, `rep_submitTime` FROM `repairs` WHERE `rep_endTime` is NULL AND `rep_getID` = "'.$rep_getID.'" '; 
    
    echo '<form method="POST" action="get_repair_2.php">';
        echo '選澤未完成的修繕單';
        echo '<select name="repID">';
        $result_1 = mysqli_query($con, $sql_1); 
            if(mysqli_num_rows($result_1)>0){  
                while ($row = mysqli_fetch_object($result_1)){
                    $repID=$row->repID;
                    $rep_submitTime = $row->rep_submitTime;
                    echo '<option value="'.$repID.'">'.$repID.'時間'.$rep_submitTime.'</option>';
                }
            }
        echo '</select>';

    echo '<input type="submit" value="發送">';            
    echo '</form>'; 
    //$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+6, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    //echo $datetime;

?>
</body>
