<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "8147";
	$db_name ="project2";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
	mysqli_query($db_link, 'SET CHARACTER SET utf8');
	if(isset($_POST["action"])&&($_POST["action"]=="update")){	

		$memName=$_POST['memName'];
		$memKey=$_POST['memKey'];
		$memEmail=$_POST['memEmail'];
		$memAddress=$_POST['memAddress'];
		$memTel=$_POST['memTel'];
		$memGender=$_POST['memGender'];
	
		$sql1 = "UPDATE `member` SET `memName` = '".$memName."'  WHERE `memID`='".$memID."'";
		$sql2 = "UPDATE `member` SET `memKey` = '".$memKey."'  WHERE `memID`='".$memID."'";
		$sql3 = "UPDATE `member` SET `memEmail` = '".$memEmail."'  WHERE `memID`='".$memID."'";
		$sql4 = "UPDATE `member` SET `memAddress` = '".$memAddress."'  WHERE `memID`='".$memID."'";
		$sql5 = "UPDATE `member` SET `memTel` = '".$memTel."'  WHERE `memID`='".$memID."'";
		$sql6 = "UPDATE `member` SET `memGender` = '".$memGender."'  WHERE `memID`='".$memID."'";
	
		mysqli_query($db_link,$sql1);
		mysqli_query($db_link,$sql2);
		mysqli_query($db_link,$sql3);
		mysqli_query($db_link,$sql4);
		mysqli_query($db_link,$sql5);
		mysqli_query($db_link,$sql6);
    redirect('/welcome/memData');

	}
$sql = "SELECT * FROM `member` WHERE `memID`='".$memID."'";
$result = mysqli_query($db_link,$sql);
$row = mysqli_fetch_assoc($result);


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員資料管理系統</title>
</head>
<body>
<h1 align="center">會員資料管理系統 - 修改資料</h1>
<p align="center"><a href=<?php echo site_url("/welcome/memData")?>>回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>會員姓名</td><td><input type="text" name="memName" id="memName" value="<?php echo $row["memName"];?>"></td>
    </tr>
	<tr>
      <td>密碼</td><td><input type="text" name="memKey" id="memKey" value="<?php echo $row["memKey"];?>"></td>
    </tr>
	<tr>
      <td>電子信箱</td><td><input type="text" name="memEmail" id="memEmail" value="<?php echo $row["memEmail"];?>"></td>
    </tr>
	<tr>
      <td>地址</td><td><input type="text" name="memAddress" id="memAddress" value="<?php echo $row["memAddress"];?>"></td>
    </tr>
	<tr>
      <td>電話</td><td><input type="text" name="memTel" id="memTel" value="<?php echo $row["memTel"];?>"></td>
    </tr>
    <tr>
      <td>性別</td><td>

      <?php
          if($row["memGender"]=="M"){
          	echo "
      		<input type='radio' name='memGender' id='radio' value='1' checked='checked'>男
      		<input type='radio' name='memGender' id='radio' value='2' >女";
          }else{
          	echo "
          	<input type='radio' name='memGender' id='radio' value='1' >男
      		<input type='radio' name='memGender' id='radio' value='2' checked='checked'>女
      		";
          }

      ?>

      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="memID" type="hidden" value="<?php echo $row["memID"];?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>