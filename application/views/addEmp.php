<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "8147";
	$db_name ="project2";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
	mysqli_query($db_link, 'SET CHARACTER SET utf8');
	$name=$_POST['emp_Name'];
	$id=$_POST['empID'];
	$key=$_POST['empKey'];
	$title=$_POST['title'];
	$email=$_POST['empEmail'];
	$address=$_POST['empAddress'];
	$tel=$_POST['empTel'];
	$gender=$_POST['emp_Gender'];
	$time=$_POST['workingtime'];
	$year=$_POST['empYear'];
	$salary=$_POST['salary'];

	
	
	$sql= "INSERT INTO `employee` (`emp_Name`, `empID`, `empKey`, `title`, `empEmail`, `empAddress`, `empTel`, `emp_Gender`, `workingtime`, `empYear`, `salary`) VALUES('$name','$id','$key','$title','$email','$address','$tel','$gender','$time','$year','$salary')";
	$result= mysqli_query($db_link,$sql);
	
	

	header("Location: employeeData.php");
}	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>員工資料管理系統</title>
</head>
<body>
<h1 align="center">員工資料管理系統 - 新增資料</h1>
<p align="center"><a href="employeeLogin.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
  <table border="1" align="center" cellpadding="4">
    <tr><td align="right">員工姓名: </td><td align="left"><input type="text" name="emp_Name"></td></tr>
<tr><td align="right">設定員工ID: </td><td align="left"><input type="text" name="empID"></td></tr>
<tr><td align="right">設定密碼: </td><td align="left"><input type="password" name="empKey"></td></tr>
<tr><td align="right">再次確認密碼: </td><td align="left"><input type="password" name="empKey2"></td></tr>
<tr><td align="right">職稱: </td><td align="left"><input type="text" name="title"></td></tr>
<tr><td align="right">電子信箱: </td><td align="left"><input type="text" name="empEmail"></td></tr>
<tr><td align="right">地址: </td><td align="left"><input type="text" name="empAddress"></td></tr>
<tr><td align="right">電話: </td><td align="left"><input type="text" name="empTel"></td></tr>
<tr><td align="right">性別: </td><td align="left">
<input type="radio" name="emp_Gender" value="M" checked ="checked">男性
<input type="radio" name="emp_Gender" value="F">女性
</td></tr>
<tr><td align="right">工作時間: </td><td align="left"><input type="text" name="workingtime"></td></tr>
<tr><td align="right">年資: </td><td align="left"><input type="text" name="empYear"></td></tr>
<tr><td align="right">薪水: </td><td align="left"><input type="text" name="salary"></td></tr>
      <td colspan="2" align="center">
      <input name="action" type="hidden" value="add">
      <input type="submit" name="button" id="button" value="新增資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>