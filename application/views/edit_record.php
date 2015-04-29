<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit_record</title>
</head>

<body>

<?php
include("SQL.php");
    
    $sql_1='SELECT `recID`,`recDate` FROM `record`'; 

    echo '<form method="POST" action="edit_record_2.php">';
        echo '<select name="recID">';
        $result_1 = mysql_query($sql_1); 
            if(mysql_num_rows($result_1)>0){  
                while ($row = mysql_fetch_object($result_1)){
                    $recID=$row->recID;
                    $recDate=$row->recDate;
                    echo '<option value="'.$recID.'">訂房紀錄'.$recID.'訂房時間'.$recDate.'</option>';
                }
            }
        echo '</select>';

    echo '<input type="submit" value="修改">';            
    echo '</form>'; 







?>
</body>
