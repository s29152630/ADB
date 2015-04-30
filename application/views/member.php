<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "8147";
$db_name ="project2";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");
//設定字元集與連線校對
//mysqli_query($db_link, 'SET NAME utf8');
mysqli_query($db_link, 'SET CHARACTER SET utf8');
//mysqli_query($db_link, "SET collaction = 'utf8_unicode_ci'");
//mysqli_query($db_link, 'SET CHARACTER_SET_CLIENT = utf8');
//mysqli_query($db_link, 'SET CHARACTER_SET_RESULT = utf8');

echo '<a href="logout.php">登出</a>  <br><br>';
//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
$memID = $_SESSION['memID']; 
if($_SESSION['memID'] != null)
{
        echo '<a href="update.php">修改個人資料</a>    ';
        echo '<a href="xxx.php">查詢訂房紀錄</a>        ';
		echo '<a href="xxxx.php">進行訂房</a>  <br><br>';
    
        
        $sql = "SELECT * FROM member WHERE `memID`='".$memID."'";
        $result= mysqli_query($db_link,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
                 echo "姓名：".$row["memName"]. ",帳號：".$row["memID"].",信箱：".$row["memEmail"].", 地址：".$row["memAddress"].", 電話：".$row["memTel"].", 性別：".$row["memGender"]."<br>";
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>