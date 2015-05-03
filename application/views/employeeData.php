<?php 
	header("Content-Type: text/html; charset=utf-8");
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "8147";
	$db_name ="project2";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
	mysqli_query($db_link, 'SET CHARACTER SET utf8');
	$sql = "SELECT * FROM `employee`";
	$result = mysqli_query($db_link,$sql);
	$total_records = mysqli_num_rows($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>員工資料管理系統</title>
</head>
<body>
<h1 align="center">員工資料管理系統</h1>
<p align="center">目前資料筆數：<?php echo $total_records;?>，<a href="addEmp.php">新增員工資料</a>。</p>
<table border="1" align="center">
  <tr>
    <th>員工姓名</th>
    <th>帳號名稱</th>
    <th>密碼</th>
    <th>職稱</th>
    <th>信箱</th>
    <th>地址</th>
	<th>電話</th>
    <th>性別</th>
    <th>工作時間</th>
	<th>年資</th>
	<th>薪水</th>
  </tr>
<?php
	while($row_result=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["emp_Name"]."</td>";
		echo "<td>".$row_result["empID"]."</td>";
		echo "<td>".$row_result["empKey"]."</td>";
		echo "<td>".$row_result["title"]."</td>";
		echo "<td>".$row_result["empEmail"]."</td>";
		echo "<td>".$row_result["empAddress"]."</td>";
		echo "<td>".$row_result["empTel"]."</td>";
		echo "<td>".$row_result["emp_Gender"]."</td>";
		echo "<td>".$row_result["workingtime"]."</td>";
		echo "<td>".$row_result["empYear"]."</td>";
		echo "<td>".$row_result["salary"]."</td>";
		echo "<td><a href='updateB.php?empID=".$row_result["empID"]."'>修改</a> ";
		echo "<a href='deleteB.php?empID=".$row_result["empID"]."'>刪除</a></td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>