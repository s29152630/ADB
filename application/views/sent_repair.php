<?php session_start();?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sent repairs</title>
</head>

<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<?php
include("SQL.php");
    
    $sql_1='SELECT `emp_Name`,`empID` FROM `employee` WHERE `title` = "cleaner"'; 
    $sql_2='SELECT `roomID` FROM `Room`'; 

    echo '<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:450px; border-radius: 8px;margin-top:200px;">';        
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
    echo '<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;" type="submit" value="發送">'; 
    echo '</div>';           
    //$datetime = date ("Y-m-d H:i:s" , mktime(date('H')+6, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    //echo $datetime;

?>
</body>
