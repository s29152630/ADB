<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Format date</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd");
  });
  $(function() {
    $( "#datepicker2" ).datepicker();
    $( "#datepicker2" ).datepicker( "option", "dateFormat", "yy-mm-dd");
  });
  </script>
</head>
<body>

<h1>員工專用訂房紀錄查詢</h1>

<?php echo form_open('room/inquireRoomRecordSuccess'); ?>

房間人數
<select name="roomCapacity">
	<option value="0" <?php echo set_select('roomCapacity', '0'); ?> ></option>
	<option value="2" <?php echo set_select('roomCapacity', '2'); ?> >2</option>
	<option value="4" <?php echo set_select('roomCapacity', '4'); ?> >4</option>
	<option value="6" <?php echo set_select('roomCapacity', '6'); ?> >6</option>
	<option value="8" <?php echo set_select('roomCapacity', '8'); ?> >8</option>
</select>
</br>

房間價錢
<select name="roomPrice">
	<option value="0" <?php echo set_select('roomPrice', '0'); ?> ></option>
	<option value="2000" <?php echo set_select('roomPrice', '2000'); ?> >$2000</option>
	<option value="4000" <?php echo set_select('roomPrice', '4000'); ?> >$4000</option>
	<option value="6000" <?php echo set_select('roomPrice', '6000'); ?> >$6000</option>
	<option value="8000" <?php echo set_select('roomPrice', '8000'); ?> >$8000</option>
</select>
</br>

房間風格
<select name="roomStyle">
	<option value="0" <?php echo set_select('roomStyle', '0'); ?> ></option>
	<option value="紅海風格" <?php echo set_select('roomStyle', '紅海風格'); ?> >紅海風格</option>
	<option value="橙海風格" <?php echo set_select('roomStyle', '橙海風格'); ?> >橙海風格</option>
	<option value="黃海風格" <?php echo set_select('roomStyle', '黃海風格'); ?> >黃海風格</option>
	<option value="綠海風格" <?php echo set_select('roomStyle', '綠海風格'); ?> >綠海風格</option>
	<option value="藍海風格" <?php echo set_select('roomStyle', '藍海風格'); ?> >藍海風格</option>
	<option value="靛海風格" <?php echo set_select('roomStyle', '靛海風格'); ?> >靛海風格</option>
	<option value="紫海風格" <?php echo set_select('roomStyle', '紫海風格'); ?> >紫海風格</option>
</select>
</br>

預約住房日期
<input type="text" id="datepicker" size="30" name="date1">
<input type="text" id="datepicker2" size="30" name="date2">

<div><input type="submit" value="Submit" /></div>
</form>



</body>
</html>