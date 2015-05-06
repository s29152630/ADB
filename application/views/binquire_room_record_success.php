<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
</head>
<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
	<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);margin: 0px auto; width:800px; border-radius: 8px;margin-top:150px;">
	<table width="100%" style="font-weight:bold;">
	<tr>
		<td>預住日期</td>
		<td>入房時間</td>
		<td>離房時間</td>
		<td>房間大小</td>
		<td>房間價格</td>
		<td>房間風格</td>

	</tr>
	<?php foreach ($resultSet as $resultSet_item): ?>

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
	<a href=<?php echo site_url("welcome/boss"); ?> >回主畫面</a>
</div>

</body>
</html>