<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">


	
</head>
<body style="background-image: url(http://taiwanviptravel.com/wp-content/uploads/2012/07/DSC_0034-2.jpg); background-size:100%">

<div id="container">




<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "8147";
$db_name ="project2";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");
mysqli_query($db_link, 'SET CHARACTER SET utf8');

$memID = $_SESSION['memID']; 
if($_SESSION['memID'] != null)
{   
        $sql = "SELECT * FROM member WHERE `memID`='".$memID."'";
        $result= mysqli_query($db_link,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
                 echo '<div style="margin-left:65%; margin-top:30%;">';
                 echo "姓名：".$row["memName"]. "</br>帳號：".$row["memID"]."</br>信箱：".$row["memEmail"]."</br>地址：".$row["memAddress"]."</br>電話：".$row["memTel"]."</br>性別：".$row["memGender"]."<br>";
        		 echo '</div>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>

<div style="margin-left:65%">
	<a href=<?php echo site_url("welcome/logout"); ?> >登出</a>
	<a href=<?php echo site_url("welcome/memberUpdate"); ?> >修改會員資料</a>
	<a href=<?php echo site_url("room/roomRecord"); ?> >查詢訂房紀錄</a>
	<a href=<?php echo site_url("room/inquireForm"); ?> >查詢可訂房間</a>
</div>
</div>
</body>
</html>