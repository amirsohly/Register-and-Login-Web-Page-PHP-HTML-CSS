<?php include('server.php') ?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
<title>ورود به بی‌ام‌دبلیو فارسی</title>
<link rel="icon" type="image/x-icon" href="BMW.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
  <div class="header" style="background-color:#04AA6D;">
  	<h2 style="font-family:nazanin;">فرم ورود بی‌ام‌دبلیو فارسی</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="font-family:nazanin;"><p ALIGN="right"><b>نام کاربری</b></p></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label style="font-family:nazanin;"><p ALIGN="right"><b>رمزعبور</b></p></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="button button" name="login_user">ورود</button>
  	</div>
  	<p style="font-family:NAZANIN;color:green;"><b>
  		حساب کاربری ندارید ؟   <a href="register.php">ثبت‌نام کنید</a></b>
  	</p>
	<br>
	<p ALIGN="center" style="font-family:nazanin;font-size:25px;">
  		<a href="home.php"><b>به صفحه اصلی بروید</b></a>
  	</p>
	
  </form>
</body>
</html>