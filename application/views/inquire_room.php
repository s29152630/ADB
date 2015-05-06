<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
  </script>
</head>
<body style="font-weight:bold;font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<div style="ZOOM: 150% ;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:400px; border-radius: 8px;margin-top:255px;  ">

<?php echo form_open('room/inquireForm'); ?>

房間人數
<select name="roomCapacity">
	<option value="2" <?php echo set_select('roomCapacity', '2', TRUE); ?> >2</option>
	<option value="4" <?php echo set_select('roomCapacity', '4'); ?> >4</option>
</select>
</br>

房間價錢
<select name="roomPrice">
	<option value="2000" <?php echo set_select('roomPrice', '2000', TRUE); ?> >$2000</option>
	<option value="4000" <?php echo set_select('roomPrice', '4000'); ?> >$4000</option>
</select>
</br>

房間風格
<select name="roomStyle">
	<option value="紅海風格" <?php echo set_select('roomStyle', '紅海風格', TRUE); ?> >紅海風格</option>
	<option value="橙海風格" <?php echo set_select('roomStyle', '橙海風格'); ?> >橙海風格</option>
	<option value="黃海風格" <?php echo set_select('roomStyle', '黃海風格'); ?> >黃海風格</option>
	<option value="綠海風格" <?php echo set_select('roomStyle', '綠海風格'); ?> >綠海風格</option>
</select>
</br>

預約住房日期
<input type="text" id="datepicker" size="30" name="date">

<input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px" type="submit" value="Submit" />
<a href=<?php echo site_url("welcome/memberIndex"); ?> >回主畫面</a>



</form>
</div>
</body>
</html>