<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
</head>
<body style="font-family:Microsoft JhengHei;font-weight:bold;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

	<div style="ZOOM: 200% ;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:300px; border-radius: 8px;margin-top:220px;  ">
	<?php foreach ($resultSet as $resultSet_item): ?>
		<?php $id = $resultSet_item->roomID ?>
    	房間人數:<?php echo $resultSet_item->roomCapacity ?></br>
    	房間價錢:<?php echo $resultSet_item->roomPrice ?></br>
    	房間風格:<?php echo $resultSet_item->roomStyle ?>
    	<span style="float:right">
    		<a href=<?php echo site_url("room/bookingRoom/" . $id . "/" . $date); ?>>預約</a>
  		</span>

	<?php endforeach ?>
	</div>

</body>
</html>