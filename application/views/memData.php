<?php 
	header("Content-Type: text/html; charset=utf-8");
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "nanamylove";
	$db_name ="hotel";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
	mysqli_query($db_link, 'SET CHARACTER SET utf8');
	$sql = "SELECT * FROM `member`";
	$result = mysqli_query($db_link,$sql);
	$total_records = mysqli_num_rows($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員資料管理系統</title>
</head>
<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); text-align:center;margin: 0px auto; width:800px; border-radius: 8px;margin-top:150px;">	
會員資料管理系統</br>
目前資料筆數：<?php echo $total_records;?>
<table border="1" align="center">
  <tr>
    <th>會員姓名</th>
    <th>帳號名稱</th>
    <th>密碼</th>
    <th>信箱</th>
    <th>地址</th>
    <th>電話</th>
    <th>性別</th>
  </tr>

<?php
	while($row_result=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["memName"]."</td>";
		echo "<td>".$row_result["memID"]."</td>";
		echo "<td>".$row_result["memKey"]."</td>";
		echo "<td>".$row_result["memEmail"]."</td>";
		echo "<td>".$row_result["memAddress"]."</td>";
		echo "<td>".$row_result["memTel"]."</td>";
		echo "<td>".$row_result["memGender"]."</td>";
		echo "<td><a href=" . site_url("welcome/updateC/" . $row_result["memID"]) . ">修改</a></td>";
		echo "<td><a href=" . site_url("welcome/delete/" . $row_result["memID"]) . ">刪除</a></td>"; 
		echo "</tr>";
	}
?>

	

</table>
		<a href=<?php echo site_url("welcome/counter"); ?> >回主畫面</a>
</div>
</body>
</html>

