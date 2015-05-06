<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit_record</title>
</head>

<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<?php
include("SQL.php");
    
    $sql_1='SELECT `roomID`,`payDay`,`checkinDate`,`checkoutDate`,`recID`,`recDate` FROM `record`'; 

    echo '<div style="ZOOM: 200% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:455px; border-radius: 8px;margin-top:200px;">';
    echo form_open('repair/editRecord2');
        echo '<select name="recID">';
        $result_1 = mysqli_query($con, $sql_1); 
            if(mysqli_num_rows($result_1)>0){  
                while ($row = mysqli_fetch_object($result_1)){
                    $roomID=$row->roomID;
                    $recID=$row->recID;
                    $recDate=$row->recDate;
                    $payDay=$row->payDay;
                    $checkinDate=$row->checkinDate;
                    $checkoutDate=$row->checkoutDate;
                    echo '<option value="'.$recID.'">房號'.$roomID.',付款時間'.$payDay.',入住時間'.$checkinDate.',退房時間'.$checkoutDate.'</option>';
                }
            }
        echo '</select>';

    echo '<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;" type="submit" value="修改">'; 
       




?>
    <div style="text-align:center;">
        <a href=<?php echo site_url("welcome/counter"); ?> >回主畫面</a>
    </div>
</div>;

</body>
