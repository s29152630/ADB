<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//連接資料庫

//資料庫主機設定
$db_host = "localhost";
$db_username = "root";
$db_password = "nanamylove";
$db_name ="hotel";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");

$id = $_POST['memID'];
$pw = $_POST['memKey'];
//搜尋資料庫資料

//echo $id;
//echo $pw;

$sql= "SELECT memID , memKey FROM member WHERE memID ='$id' AND memKey ='$pw'";
$result= mysqli_query($db_link,$sql);

//判斷帳號與密碼是否為空白以及MySQL資料庫裡是否有這個會員
if(!$result || $id==null || $pw==null){
	echo "error";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login>';
}
else{
	echo "success";
	$_SESSION['memID'] = $id;
	echo '<meta http-equiv=REFRESH CONTENT=1;url=memberIndex>';
}





?>