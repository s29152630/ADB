<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
	<meta charset="utf-8">


	
</head>
<body style="background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
    <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    
</head>
<body style="background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">






<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "nanamylove";
$db_name ="hotel";
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
                 echo '<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto; width:300px; border-radius: 8px;margin-top:200px;">';
                 echo '<span style="font-family:Microsoft JhengHei;">';
                 echo "姓名：".$row["memName"]. "</br>帳號：".$row["memID"]."</br>信箱：".$row["memEmail"]."</br>地址：".$row["memAddress"]."</br>電話：".$row["memTel"]."</br>性別：".$row["memGender"]."<br>";
                 echo '</span>';
                 echo '</div>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>

<div style="ZOOM: 150% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); margin: 0px auto;width:300px; border-radius: 8px;">
    <span style="font-family:Microsoft JhengHei;">
    <a href=<?php echo site_url("welcome/logout"); ?> >登出</a></br>
    <a href=<?php echo site_url("welcome/memberUpdate"); ?> >修改會員資料</a></br>
    <a href=<?php echo site_url("room/roomRecord"); ?> >查詢訂房紀錄</a></br>
    <a href=<?php echo site_url("room/index"); ?> >查詢可訂房間</a></br>
    </span>
</div>

</body>
</html>


</body>

</html>