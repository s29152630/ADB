<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo form_open('welcome/connectMember'); ?>
<input type="text" name="memID" /> <br>
<input type="password" name="memKey" /> <br>
<input type="submit" name="button" value="登入" />&nbsp;&nbsp;
<a href=<?php echo site_url("welcome/memberAdd"); ?>>申請帳號</a>
