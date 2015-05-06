<?php session_start();?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
    $( ".datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd");
  });
  </script>
<title>edit_record_2</title>
</head>

<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<?php
    include("SQL.php");
    $_SESSION["recID"] = $recID;
    
     
    $sql_1 = 'SELECT * FROM `record` WHERE `recID` = "'.$_SESSION["recID"].'" '; 
    
    $result_1 = mysqli_query($con, $sql_1); 
    if(mysqli_num_rows($result_1)>0){  
        while ($row = mysqli_fetch_object($result_1)){
            $payDay=$row->payDay;
            $checkinDate=$row->checkinDate;
            $checkoutDate=$row->checkoutDate;
        }
    }

    echo '<div style="ZOOM: 200% ;font-weight: bold;text-align:center; background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:280px; border-radius: 8px;margin-top:200px;"> ';
    echo form_open('room/editRecordSuccess');
            echo '付款時間:<input type="text" class="datepicker" name="payDay" value="'.$payDay.'"></br>';
            echo '入住時間:<input type="text" class="datepicker" name="checkinDate" value="'.$checkinDate.'"></br>';
            echo '退房時間:<input type="text" class="datepicker" name="checkoutDate" value="'.$checkoutDate.'"></br>';        
    echo '<div style="text-align:center;">';
      echo '<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;" type="submit" value="修改">';
    echo'</div>';
    echo '</form>'; 
    echo '</div>';






?>
</body>
