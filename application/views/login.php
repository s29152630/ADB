<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body style="background-size: cover; background-image: url(http://www.ipress.com.hk/photo/20069_3.jpg);">
<?php echo form_open('welcome/connectMember'); ?>

	<div style="ZOOM: 200% ;font-weight: bold;background-color: hsla(210, 80%, 50%, 0.075); text-align:center;margin: 0px auto; width:300px; border-radius: 8px;margin-top:200px;">	
		<span style="font-family:Microsoft JhengHei;">帳號:</span><input type="text" name="memID" /></br>
		<span style="font-family:Microsoft JhengHei;">密碼:</span><input type="password" name="memKey" /></br>
		<span style="font-family:Microsoft JhengHei;">還不是會員?</span>
		<span style="font-family:Microsoft JhengHei;"><a href=<?php echo site_url("welcome/memberAdd"); ?>>申請帳號</a></span>
		<input style="font-family:Microsoft JhengHei; font-weight: bold; background-color: hsla(210, 80%, 50%, 0.075);  border-radius: 4px" type="submit" name="button" value="登入" /></br>
	</div>


</body>
