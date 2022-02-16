<?php include('server.php') ?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
<title>بی‌ام‌دبلیو فارسی</title>
<link rel="icon" type="image/x-icon" href="BMW.png">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
  <div class="header" style="background-color:#04AA6D;">
  	<h2 style="font-family:nazanin;">فرم ثبت‌نام بی‌ام‌دبلیو فارسی</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="font-family:nazanin;"><p ALIGN="right"><b>نام کاربری</b></p></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="font-family:nazanin;"><p ALIGN="right"><b>ایمیل</b></p></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="font-family:nazanin;"><p ALIGN="right"><b>رمزعبور</b></p></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label style="font-family:nazanin;"><p ALIGN="right"><b>تکرار رمزعبور</b></p></label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="button button" name="reg_user">ثبت‌نام</button>
  	</div>
  	<p style="font-family:NAZANIN;color:green;"><b>
  		حساب کاربری دارید ؟  <a href="login.php">وارد شوید</a></b>
  	</p>
	<br>
	<p ALIGN="center" style="font-family:nazanin;font-size:25px;">
  		<a href="home.php"><b>به صفحه اصلی بروید</b></a>
  	</p>
  </form>
</body>
</html>