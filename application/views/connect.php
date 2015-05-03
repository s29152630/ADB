<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "8147";
$db_name ="project2";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");


$id = $_POST['memID'];
$pw = $_POST['memKey'];
$sql= "SELECT memID , memKey FROM member WHERE `memID` ='".$id."' AND `memKey` ='".$pw."'";
$result= mysqli_query($db_link,$sql);
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