<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "nanamylove";
$db_name ="hotel";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");



$id = $_POST['empID'];
$pw = $_POST['empKey'];
$sql= "SELECT empID , empKey , title FROM employee WHERE `empID` ='".$id."' AND `empKey` ='".$pw."'";
$result= mysqli_query($db_link,$sql);
$row = mysqli_fetch_row($result);


if($id!=null && $pw!=null && $row){
	echo "登入成功";
	$_SESSION['empID'] = $id;
	$title = $row[2];
	$_SESSION['title'] = $title;
	if($_SESSION['title'] == "boss"){
		echo '<meta http-equiv=REFRESH CONTENT=1;url=boss>';
	}
	else if($_SESSION['title'] == "counter"){
		echo '<meta http-equiv=REFRESH CONTENT=1;url=counter>';
	}
	else{
		echo '<meta http-equiv=REFRESH CONTENT=1;url=cleaner>';
	}
	
	
}
else{
	echo '登入錯誤';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=employeeLogin>';
}

?>