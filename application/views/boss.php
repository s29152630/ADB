<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body style=" font-weight:bold; font-family:Microsoft JhengHei;background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "nanamylove";
$db_name ="hotel";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");
mysqli_query($db_link, 'SET CHARACTER SET utf8');


$empID = $_SESSION['empID']; 
if($_SESSION['empID'] != null)
{
    
    
        
        $sql = "SELECT * FROM employee WHERE `empID`='".$empID."'";
        $result= mysqli_query($db_link,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
                 echo '<div <div style="ZOOM: 150% ;margin: 0px auto;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075);  width:300px; border-radius: 8px;margin-top:150px;">';
                 echo "姓名：".$row["emp_Name"]. "</br>員工帳號：".$row["empID"]. "</br>職稱：".$row['title']. "</br>信箱：".$row["empEmail"]. "</br>地址：".$row["empAddress"]. "</br>電話：".$row["empTel"]. "</br>性別：".$row["emp_Gender"]. "</br>上班時間：".$row["workingtime"]. "</br>年資：".$row["empYear"]. "</br>薪水：".$row["salary"]."<br>";
                 echo '<a href="employeeLogout">登出</a></br>';
                 echo "<a href=" . site_url("welcome/employeeData") . ">查詢員工資料</a></br>"; 
                 echo "<a href=" . site_url("room/inquireRoomRecord") . ">查詢顧客訂房記錄</a></br>";
                 echo '</div>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=employeeLogin>';
}
?>
</body>