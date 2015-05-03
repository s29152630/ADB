<?php 
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "nanamylove";
	$db_name ="hotel";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
  mysqli_query($db_link, 'SET CHARACTER SET utf8');

	
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	

	$sql= "DELETE FROM `employee` WHERE `empID`='".$empID."'";
	mysqli_query($db_link,$sql);
  redirect('/welcome/employeeData');
}

$sql_db = "SELECT * FROM `employee` WHERE `empID`='".$empID."'";
$result = mysqli_query($db_link,$sql_db);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員資料管理系統</title>
</head>
<body>
<h1 align="center">會員資料管理系統 - 刪除資料</h1>
<p align="center"><a href=<?php echo site_url("/welcome/employeeData")?>>回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>員工姓名</td><td><?php echo $row["emp_Name"];?></td>
    </tr>
	<tr>
      <td>密碼</td><td><?php echo $row["empKey"];?></td>
    </tr>
	<tr>
      <td>職稱</td><td><?php echo $row["title"];?></td>
    </tr>
	<tr>
      <td>電子信箱</td><td><?php echo $row["empEmail"];?></td>
    </tr>
	<tr>
      <td>地址</td><td><?php echo $row["empAddress"];?></td>
    </tr>
	<tr>
      <td>電話</td><td><?php echo $row["empTel"];?></td>
    </tr>
    <tr>
      <td>性別</td><td><?php echo $row["emp_Gender"];?></td>
    </tr>
	<tr>
      <td>工作時間</td><td><?php echo $row["workingtime"];?></td>
    </tr>
	<tr>
      <td>年資</td><td><?php echo $row["empYear"];?></td>
    </tr>
	<tr>
      <td>薪水</td><td><?php echo $row["salary"];?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="empID" type="hidden" value="<?php echo $row["empID"];?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>