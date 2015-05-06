<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
</head>
<body style="font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
<div style="ZOOM: 150% ;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:700px;border-radius: 8px;margin-top:115px;  ">


	<table style="width:100%; font-weight:bold; ">
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

		<td><?php echo $resultSet_item->startDate ?></td>
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