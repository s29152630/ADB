<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>get repairs_2</title>
</head>

<body>

<?php
    
    include("SQL.php");
    
    $rep_getID = 1;//暫定為1
    $repID = $_POST['repID'];
    $_SESSION["repID"] = $repID;
    
    $sql_1 = 'SELECT `rep_submitTime`,`repContent`,`roomID`,`rep_sentID` FROM `repairs` WHERE `repID` = "'.$_SESSION["repID"].'" '; 



    $result_1 = mysql_query($sql_1); 
    if(mysql_num_rows($result_1)>0){  
        while ($row = mysql_fetch_object($result_1)){
            $roomID=$row->roomID;
            $rep_sentID=$row->rep_sentID;
            $repContent=$row->repContent;
            $rep_submitTime=$row->rep_submitTime;

        }
    }
    

    echo '</br>';
    echo '修繕單號:'.$_SESSION["repID"].'</br>';
    echo '房號:'.$roomID.'</br>';
    echo '發送人ID:'.$rep_sentID.'</br>';
    echo '修繕內容:'.$repContent.'</br>';
    echo '發送時間:'.$rep_submitTime.'</br>';   

    echo '<form method="POST" action="get_repair_3.php">';
    echo '花費金額:<input type="text" name="repCost" value="" >';
    echo '<input type="submit" value="發送">';            
    echo '</form>'; 

    
?>
</body>