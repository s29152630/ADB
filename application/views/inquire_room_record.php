<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body style="background-image: url(http://taiwanviptravel.com/wp-content/uploads/2012/07/DSC_0034-2.jpg); background-size:100%">
<div style="margin-top:17%; margin-left:59%">


	<table style="width:100%">
	<tr>
		<td>預住日期</td>
		<td>入房時間</td>
		<td>離房時間</td>
		<td>房間大小</td>
		<td>房間價格</td>
		<td>房間風格</td>

	</tr>
	<?php foreach ($resultSet as $resultSet_item): 

	?>

	<tr>

		<td><?php echo $resultSet_item->recDate ?></td>
		<td><?php echo $resultSet_item->checkinDate ?></td>
		<td><?php echo $resultSet_item->checkoutDate ?></td>
    	<td><?php echo $resultSet_item->roomCapacity ?></td>
    	<td><?php echo $resultSet_item->roomPrice ?></td>
    	<td><?php echo $resultSet_item->roomStyle ?></td>
  	</tr>
	<?php endforeach ?>
	</table>

<a href=<?php echo site_url("welcome/memberIndex"); ?> >回主畫面</a>

</div>
</body>
</html>