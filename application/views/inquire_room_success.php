<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

	<table style="width:100%">
	<?php foreach ($resultSet as $resultSet_item): ?>
	<tr>
		<?php $id = $resultSet_item->roomID ?>
    	<td><?php echo $resultSet_item->roomCapacity ?></td>
    	<td><?php echo $resultSet_item->roomPrice ?></td>
    	<td><?php echo $resultSet_item->roomStyle ?></td>
    	<td><button type="button" value=><a href=<?php echo site_url("room/bookingRoom/" . $id); ?>>預約</a></button></td>
  	</tr>
	<?php endforeach ?>
	</table>

</body>
</html>