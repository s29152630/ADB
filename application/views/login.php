<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body style="background-image: url(http://taiwanviptravel.com/wp-content/uploads/2012/07/DSC_0034-2.jpg); background-size:100%">
<?php echo form_open('welcome/connectMember'); ?>
<div style="margin-left:65%; margin-top:30%;">	
	帳號:<input type="text" name="memID" /> <br>
	密碼:<input type="password" name="memKey" /> <br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
<a href=<?php echo site_url("welcome/memberAdd"); ?>>申請帳號</a>
</div>
</body>

