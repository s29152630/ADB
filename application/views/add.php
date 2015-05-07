<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("SQL.php");
	mysqli_query($con, 'SET CHARACTER SET utf8');
	$name=$_POST['memName'];
	$id=$_POST['memID'];
	$key=$_POST['memKey'];
	$emali=$_POST['memEmail'];
	$address=$_POST['memAddress'];
	$tel=$_POST['memTel'];
	$gender=$_POST['memGender'];
	
	
	$sql= "INSERT INTO `member` (`memName`, `memID`, `memKey`, `memAddress`, `memEmail`, `memTel`, `memGender`) VALUES('$name','$id','$key','$address','$emali','$tel','$gender')";
	$result= mysqli_query($con,$sql);
	header("Location: login");
	//redirect('/welcome/memberIndex');

}	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員資料管理系統</title>
</head>
<body style=" font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); text-align:center;margin: 0px auto; width:300px; border-radius: 8px;margin-top:150px;">	
<form action="" method="post" name="formAdd" id="formAdd">
  <table style=" font-weight: bold;"border="1" align="center" cellpadding="4">
    <tr><td align="right">會員姓名: </td><td align="left"><input type="text" name="memName"></td></tr>
<tr><td align="right">設定會員ID: </td><td align="left"><input type="text" name="memID"></td></tr>
<tr><td align="right">設定密碼: </td><td align="left"><input type="password" name="memKey"></td></tr>
<tr><td align="right">再次確認密碼: </td><td align="left"><input type="password" name="memKey2"></td></tr>
<tr><td align="right">電子信箱: </td><td align="left"><input type="text" name="memEmail"></td></tr>
<tr><td align="right">地址: </td><td align="left"><input type="text" name="memAddress"></td></tr>
<tr><td align="right">電話: </td><td align="left"><input type="text" name="memTel"></td></tr>
<tr><td align="right">性別: </td><td align="left">
<input type="radio" name="memGender" value="M" checked ="checked">男性
<input type="radio" name="memGender" value="F">女性
</td></tr>
      <td colspan="2" align="center">
      <input name="action" type="hidden" value="add">
      <input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;"type="submit" name="button" id="button" value="新增資料">
      <input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px;"type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>

  </table>
  <p align="center"><a href="login">回主畫面</a></p>
</div>
</form>
</body>
</html>