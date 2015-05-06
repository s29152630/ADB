<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete_record</title>
</head>

<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<?php
include("SQL.php");
    
    $sql_1='SELECT `recID`,`recDate` FROM `record`'; 
    echo '<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); text-align:center;margin: 0px auto; width:300px; border-radius: 8px;margin-top:150px;">';
    echo form_open('room/deleteRecordSuccess');
        echo '<select name="recID">';
        $result_1 = mysqli_query($con, $sql_1); 
            if(mysqli_num_rows($result_1)>0){  
                while ($row = mysqli_fetch_object($result_1)){
                    $recID=$row->recID;
                    $recDate=$row->recDate;
                    echo '<option value="'.$recID.'">訂房紀錄'.$recID.'訂房時間'.$recDate.'</option>';
                }
            }
        echo '</select>';

    echo '<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;" type="submit" value="刪除">';            
    echo '</form>'; 
    
    
?>
        <a href=<?php echo site_url("welcome/counter"); ?> >回主畫面</a>
</div>
   
</body>
