
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "8147";
$db_name ="project2";
$db_link = @mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db_link) die("資料連結失敗！");
mysqli_query($db_link, 'SET CHARACTER SET utf8');
echo '<a href="employeeLogout">登出</a>  <br><br>';

$empID = $_SESSION['empID']; 
if($_SESSION['empID'] != null)
{
        echo "<a href=" . site_url("welcome/employeeData") . ">查詢員工資料</a><br><br>"; 
        echo "<a href=" . site_url("room/inquireRoomRecord") . ">查詢顧客訂房記錄</a><br><br>"; 

    
        
        $sql = "SELECT * FROM employee WHERE `empID`='".$empID."'";
        $result= mysqli_query($db_link,$sql);
        while($row = mysqli_fetch_assoc($result))
        {
                 echo "姓名：".$row["emp_Name"]. ",員工帳號：".$row["empID"]. ",職稱：".$row['title']. ",信箱：".$row["empEmail"]. ",地址：".$row["empAddress"]. ",電話：".$row["empTel"]. ",性別：".$row["emp_Gender"]. ",上班時間：".$row["workingtime"]. ",年資：".$row["empYear"]. ",薪水：".$row["salary"]."<br>";
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=employeeLogin>';
}
?>