
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "nanamylove";
	$db_name ="hotel";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
	mysqli_query($db_link, 'SET CHARACTER SET utf8');
	if(isset($_POST["action"])&&($_POST["action"]=="update")){	

		$empName=$_POST['emp_Name'];
		$empKey=$_POST['empKey'];
		$title=$_POST['title'];
		$empEmail=$_POST['empEmail'];
		$empAddress=$_POST['empAddress'];
		$empTel=$_POST['empTel'];
		$empGender=$_POST['emp_Gender'];
		$time=$_POST['workingtime'];
		$year=$_POST['empYear'];
		$salary=$_POST['salary'];
	
		$sql1 = "UPDATE `employee` SET `emp_Name` = '".$empName."'  WHERE `empID`='".$empID."'";
		$sql2 = "UPDATE `employee` SET `empKey` = '".$empKey."'  WHERE `empID`='".$empID."'";
		$sql3 = "UPDATE `employee` SET `title` = '".$title."'  WHERE `empID`='".$empID."'";
		$sql4 = "UPDATE `employee` SET `empEmail` = '".$empEmail."'  WHERE `empID`='".$empID."'";
		$sql5 = "UPDATE `employee` SET `empAddress` = '".$empAddress."'  WHERE `empID`='".$empID."'";
		$sql6 = "UPDATE `employee` SET `empTel` = '".$empTel."'  WHERE `empID`='".$empID."'";
		$sql7 = "UPDATE `employee` SET `emp_Gender` = '".$empGender."'  WHERE `empID`='".$empID."'";
		$sql8 = "UPDATE `employee` SET `workingtime` = '".$time."'  WHERE `empID`='".$empID."'";
		$sql9 = "UPDATE `employee` SET `empYear` = '".$year."'  WHERE `empID`='".$empID."'";
		$sql10 = "UPDATE `employee` SET `salary` = '".$salary."'  WHERE `empID`='".$empID."'";
	
		mysqli_query($db_link,$sql1);
		mysqli_query($db_link,$sql2);
		mysqli_query($db_link,$sql3);
		mysqli_query($db_link,$sql4);
		mysqli_query($db_link,$sql5);
		mysqli_query($db_link,$sql6);
		mysqli_query($db_link,$sql7);
		mysqli_query($db_link,$sql8);
		mysqli_query($db_link,$sql9);
		mysqli_query($db_link,$sql10);
	
		redirect('/welcome/employeeData');
	}

$sql = "SELECT * FROM `employee` WHERE `empID`='".$empID."'";
$result = mysqli_query($db_link,$sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>員工資料管理系統</title>
</head>
<body>
<h1 align="center">員工資料管理系統 - 修改資料</h1>
<p align="center"><a href=<?php echo site_url("/welcome/employeeData")?>>回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>員工姓名</td><td><input type="text" name="emp_Name" id="emp_Name" value="<?php echo $row["emp_Name"];?>"></td>
    </tr>
	<tr>
      <td>密碼</td><td><input type="text" name="empKey" id="empKey" value="<?php echo $row["empKey"];?>"></td>
    </tr>
	<tr>
      <td>職稱</td><td><input type="text" name="title" id="title" value="<?php echo $row["title"];?>"></td>
    </tr>
	<tr>
      <td>電子信箱</td><td><input type="text" name="empEmail" id="empEmail" value="<?php echo $row["empEmail"];?>"></td>
    </tr>
	<tr>
      <td>地址</td><td><input type="text" name="empAddress" id="empAddress" value="<?php echo $row["empAddress"];?>"></td>
    </tr>
	<tr>
      <td>電話</td><td><input type="text" name="empTel" id="empTel" value="<?php echo $row["empTel"];?>"></td>
    </tr>
    <tr>
      <td>性別</td><td>

      <?php
          if($row["emp_Gender"]=="M"){
          	echo "
      		<input type='radio' name='emp_Gender' id='radio' value='1' checked='checked'>男
      		<input type='radio' name='emp_Gender' id='radio' value='2' >女";
          }else{
          	echo "
          	<input type='radio' name='emp_Gender' id='radio' value='1' >男
      		<input type='radio' name='emp_Gender' id='radio' value='2' checked='checked'>女
      		";
          }

      ?>

      </td>
    </tr>
	<tr>
      <td>工作時間</td><td><input type="text" name="workingtime" id="workingtime" value="<?php echo $row["workingtime"];?>"></td>
    </tr>
	<tr>
      <td>年資</td><td><input type="text" name="empYear" id="empYear" value="<?php echo $row["empYear"];?>"></td>
    </tr>
	<tr>
      <td>薪水</td><td><input type="text" name="salary" id="salary" value="<?php echo $row["salary"];?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="memID" type="hidden" value="<?php echo $row["empID"];?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>