<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('錯誤:電子郵件或密碼錯誤')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="icon" href="https://cdn.discordapp.com/icons/637793729285062676/5f4a535464148e915f0156f1a7f53319.png?size=96">
  <meta charset="UTF-8">
  <title>Lan - 登入</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="title">
      登入
    </div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box2">
            <span class="details">電子郵件</span> <input name="email" type="email" value="<?php echo $email; ?>" required>
          </div>
          <div class="input-box2">
            <span class="details">密碼</span> <input name="password" type="password" value="<?php echo $_POST['password']; ?>" required>
          </div>
        </div>
        <div class="button">
        <button class="button" name="submit" class="btn" href="index.php">登入</button>
          <p class="login-register-text">没有账户？<a href="register.php">註冊<a/></p>
        </div>
      </form>
    </div>
  </div>
</body>
<script>
  document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}

document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
</script>
</html>