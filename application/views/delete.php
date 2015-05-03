<?php 
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "8147";
	$db_name ="project2";
	$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
	if (!$db_link) die("資料連結失敗！");
	mysqli_query($db_link, 'SET CHARACTER SET utf8');

	
if(isset($_POST["action"])&&($_POST["action"]=="delete")){	

	$sql= "DELETE FROM `member` WHERE `memID`='".$memID."'";
	mysqli_query($db_link,$sql);
  redirect('/welcome/memData');
}
$sql_db = "SELECT * FROM `member` WHERE `memID`='".$memID."'";
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
<p align="center"><a href=<?php echo site_url("/welcome/memData")?>>回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>會員姓名</td><td><?php echo $row["memName"];?></td>
    </tr>
	<tr>
      <td>密碼</td><td><?php echo $row["memKey"];?></td>
    </tr>
	<tr>
      <td>電子信箱</td><td><?php echo $row["memEmail"];?></td>
    </tr>
	<tr>
      <td>地址</td><td><?php echo $row["memAddress"];?></td>
    </tr>
	<tr>
      <td>電話</td><td><?php echo $row["memTel"];?></td>
    </tr>
    <tr>
      <td>性別</td><td><?php echo $row["memGender"];?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
	  <input name="memID" type="hidden" value="<?php echo $row["memID"];?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>