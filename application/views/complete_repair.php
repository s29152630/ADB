<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>complete repairs</title>
</head>

<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);"> 

<?php
include("SQL.php");
mysqli_query($con, 'SET CHARACTER SET utf8');
    
    $rep_sentID = $_SESSION['empID'];
    $_SESSION["rep_sentID"] = $rep_sentID;
    $sql_1='SELECT `repID`,`rep_submitTime` FROM `repairs` WHERE `rep_endTime` is not null AND `rep_sentID` = "'.$_SESSION["rep_sentID"].'" '; 
    echo '<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); text-align:center;margin: 0px auto; width:400px; border-radius: 8px;margin-top:250px;">';
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

    echo '<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;"* type="submit" value="發送">';            
    echo '</form>'; 
    echo '</div>';

?>
</body>
