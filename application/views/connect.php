<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("SQL.php");

$id = $_POST['memID'];
$pw = $_POST['memKey'];
$sql= "SELECT memID , memKey FROM member WHERE `memID` ='".$id."' AND `memKey` ='".$pw."'";
$result= mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);

if($id!=null && $pw!=null && $row){
	echo "登入成功";
	$_SESSION['memID'] = $id;
	echo '<meta http-equiv=REFRESH CONTENT=1;url=memberIndex>';
}
else{
	echo "登入錯誤";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login>';
}

?>