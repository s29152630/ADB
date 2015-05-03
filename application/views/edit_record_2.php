<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<body>

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

    echo form_open('room/editRecordSuccess');
            echo '付款時間:<input type="text" class="datepicker" name="payDay" value="'.$payDay.'"></br>';
            echo '入住時間:<input type="text" class="datepicker" name="checkinDate" value="'.$checkinDate.'"></br>';
            echo '退房時間:<input type="text" class="datepicker" name="checkoutDate" value="'.$checkoutDate.'"></br>';        
    echo '<input type="submit" value="修改">';            
    echo '</form>'; 






?>
</body>
