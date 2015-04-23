<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>

<h1>房間查詢</h1>

<?php echo form_open('room/inquireForm'); ?>

房間人數
<select name="roomCapacity">
	<option value="2" <?php echo set_select('roomCapacity', '2', TRUE); ?> >2</option>
	<option value="4" <?php echo set_select('roomCapacity', '4'); ?> >4</option>
	<option value="6" <?php echo set_select('roomCapacity', '6'); ?> >6</option>
	<option value="8" <?php echo set_select('roomCapacity', '8'); ?> >8</option>
</select>
</br>

房間價錢
<select name="roomPrice">
	<option value="2000" <?php echo set_select('roomPrice', '2000', TRUE); ?> >$2000</option>
	<option value="4000" <?php echo set_select('roomPrice', '4000'); ?> >$4000</option>
	<option value="6000" <?php echo set_select('roomPrice', '6000'); ?> >$6000</option>
	<option value="8000" <?php echo set_select('roomPrice', '8000'); ?> >$8000</option>
</select>
</br>

房間風格
<select name="roomStyle">
	<option value="紅海風格" <?php echo set_select('roomStyle', '紅海風格', TRUE); ?> >紅海風格</option>
	<option value="橙海風格" <?php echo set_select('roomStyle', '橙海風格'); ?> >橙海風格</option>
	<option value="黃海風格" <?php echo set_select('roomStyle', '黃海風格'); ?> >黃海風格</option>
	<option value="綠海風格" <?php echo set_select('roomStyle', '綠海風格'); ?> >綠海風格</option>
	<option value="藍海風格" <?php echo set_select('roomStyle', '藍海風格'); ?> >藍海風格</option>
	<option value="靛海風格" <?php echo set_select('roomStyle', '靛海風格'); ?> >靛海風格</option>
	<option value="紫海風格" <?php echo set_select('roomStyle', '紫海風格'); ?> >紫海風格</option>
</select>
</br>

預約住房日期
<input type="text" name="date" id="datepicker">

<div><input type="submit" value="Submit" /></div>



</form>

</body>
</html>