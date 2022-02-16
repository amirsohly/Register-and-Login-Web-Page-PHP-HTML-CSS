<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'project');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "نام کاربری را وارد کنید"); }
  if (empty($email)) { array_push($errors, "ایمیل را وارد کنید"); }
  if (empty($password_1)) { array_push($errors, "رمزعبور را وارد کنید"); }
  if ($password_1 != $password_2) {
	array_push($errors, "رمزعبورها مطابقت ندارند");
  }
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "این نام کاربری قبلا ثبت شده است . یک نام کاربری دیگر انتخاب کنید .");
    }

    if ($user['email'] === $email) {
      array_push($errors, "این ایمیل قبلا وارد شده است . یک ایمیل دیگر وارد کنید");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "ثبت‌نام شما با موفقیت انجام شد";
  	header('location: home1.php');
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "نام کاربری را وارد کنید");
  }
  if (empty($password)) {
  	array_push($errors, "رمزعبور را وارد کنید");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "با موفقیت وارد شدید";
  	  header('location: home1.php');
  	}else {
  		array_push($errors, "نام کاربری یا رمزعبور اشتباه است . دوباره سعی کنید .");
  	}
  }
}

?>