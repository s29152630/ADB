<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
  include("SQL.php");
	mysqli_query($con, 'SET CHARACTER SET utf8');
	if(isset($_POST["action"])&&($_POST["action"]=="update")){	
		$memID = $_SESSION['memID'];
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
	
		mysqli_query($con,$sql1);
		mysqli_query($con,$sql2);
		mysqli_query($con,$sql3);
		mysqli_query($con,$sql4);
		mysqli_query($con,$sql5);
		mysqli_query($con,$sql6);


		header("Location: memberIndex");
	}
$memID = $_SESSION['memID']; 
$sql = "SELECT * FROM `member` WHERE `memID`='".$memID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員資料管理系統</title>
</head>
<body style="font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">

<div style="ZOOM: 200% ;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:300px; border-radius: 8px;margin-top:115px;  ">

<form action="" method="post" name="formFix" id="formFix">
  <table  style="font-weight: bold;" border="1" align="center" cellpadding="4">
    
    <tr>
     
     <td >會員姓名</td><td><input type="text" name="memName" id="memName" value="<?php echo $row["memName"];?>"></td>
      
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
      <input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px" type="submit" name="button" id="button" value="更新資料">
      <input style="font-family:Microsoft JhengHei; font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px" type="reset" name="button2" id="button2" value="重新填寫">
      <p align="center"><a href="memberIndex">回主畫面</a></p>  
      </td>
      
    </tr>

  </table>

</form>

</div>
</body>
</html>