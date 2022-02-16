<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "ابتدا باید وارد شوید";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<title>بی‌ام‌دبلیو فارسی</title>
<link rel="icon" type="image/x-icon" href="BMW.png">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div class="header">
	<h2>تبریک می‌گوییم</h2>
</div>
	
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p ALIGN="center"><strong><?php echo $_SESSION['username']; ?></strong> خوش آمدید<br>

	<a href="home1.php"><button class="button button"><b>ورود به صفحه اصلی</b></button></a>
	<a href="index.php?logout='1'"><button class="button button2"><b>برای خروج کلیک کنید</b></button></a>

    	<a href="index.php?logout='1'" style="color: red;">برای خروج کلیک کنید</a></p>
    <?php endif ?>
</div>

</body>
</html>