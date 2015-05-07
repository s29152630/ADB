<?php session_start();?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>get repairs_2</title>
</head>

<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<?php
    
    include("SQL.php");
    mysqli_query($con, 'SET CHARACTER SET utf8');
    $rep_getID = $_SESSION['empID'];//暫定為1
    $repID = $_POST['repID'];
    $_SESSION["repID"] = $repID;
    
    $sql_1 = 'SELECT `rep_submitTime`,`repContent`,`roomID`,`rep_sentID` FROM `repairs` WHERE `repID` = "'.$_SESSION["repID"].'" '; 



    $result_1 = mysqli_query($con, $sql_1); 
    if(mysqli_num_rows($result_1)>0){  
        while ($row = mysqli_fetch_object($result_1)){
            $roomID=$row->roomID;
            $rep_sentID=$row->rep_sentID;
            $repContent=$row->repContent;
            $rep_submitTime=$row->rep_submitTime;

        }
    }
    

    echo '<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:300px; border-radius: 8px;margin-top:250px;">';
    echo '修繕單號:'.$_SESSION["repID"].'</br>';
    echo '房號:'.$roomID.'</br>';
    echo '發送人ID:'.$rep_sentID.'</br>';
    echo '修繕內容:'.$repContent.'</br>';
    echo '發送時間:'.$rep_submitTime.'</br>';   
    echo form_open('repair/cleanerRepairSuccess');
    echo '花費金額:<input type="text" name="repCost" value="" >';
    echo '<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;" type="submit" value="發送">';            
    echo '</form>'; 
    echo '</div>';

    
?>
</body>