<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("SQL.php");
	mysqli_query($con, 'SET CHARACTER SET utf8');
	$sql = "SELECT * FROM `member`";
	$result = mysqli_query($con,$sql);
	$total_records = mysqli_num_rows($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員資料管理系統</title>
</head>
<body>
<h1 align="center">會員資料管理系統</h1>
<p align="center">目前資料筆數：<?php echo $total_records;?>，<a href="add.php">新增會員資料</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
    <th>會員姓名</th>
    <th>帳號名稱</th>
    <th>密碼</th>
    <th>信箱</th>
    <th>地址</th>
    <th>電話</th>
    <th>性別</th>
    <th>其他功能</th>
  </tr>
  <!-- 資料內容 -->
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
		echo "<td><a href='update.php?id=".$row_result["memID"]."'>修改</a> ";
		echo "<a href='delete.php?id=".$row_result["memID"]."'>刪除</a></td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>