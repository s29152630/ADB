<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body style="background-image: url(http://taiwanviptravel.com/wp-content/uploads/2012/07/DSC_0034-2.jpg); background-size:100%">

	<div style="margin-left:65%; margin-top:30%;">
	<?php foreach ($resultSet as $resultSet_item): ?>
	
		<?php $id = $resultSet_item->roomID ?></br>
    	房間人數<?php echo $resultSet_item->roomCapacity ?></br>
    	房間價錢<?php echo $resultSet_item->roomPrice ?></br>
    	房間風格<?php echo $resultSet_item->roomStyle ?></br>
    	<button type="button" value=><a href=<?php echo site_url("room/bookingRoom/" . $id . "/" . $date); ?>>預約</a></button>
  	
	<?php endforeach ?>
	</div>

</body>
</html>