<!DOCTYPE html>
<html>
<head>
<title>اطلاعات کاربران بی‌ام‌دبلیو فارسی</title>
<link rel="icon" type="image/x-icon" href="BMW.png">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "project";

$conn = mysqli_connect('localhost', 'root', '', 'project');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<br> id: ". $row["id"]. "  /  نام کاربری : ". $row["username"]. "  /   ایمیل : " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>