<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('注册成功')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                header("Location: login.php");
			} else {
				echo "<script>alert('錯誤:出了點問題,如果幾分鐘後沒有解決請打開一張邮票')</script>";
			}
		} else {
			echo "<script>alert('錯誤:此郵件已被使用')</script>";
		}
		
	} else {
		echo "<script>alert('錯誤:檢查密碼和確認密碼')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="icon" href="https://cdn.discordapp.com/icons/637793729285062676/5f4a535464148e915f0156f1a7f53319.png?size=96">
  <meta charset="UTF-8">
  <title>Lan - 註冊</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="title">
        註冊
    </div>
    <div class="content">
        <form method="POST">
        <div class="user-details">
            <div class="input-box2">
              <span class="details">名字</span> <input minlength="3" name="username" type="text" value="<?php echo $username; ?>" required>
            </div>
          <div class="input-box2">
            <span class="details">電子郵件</span> <input type="email" name="email" value="<?php echo $email; ?>" required>
          </div>
          <div class="input-box2">
            <span class="details">密碼</span> <input minlength="5" type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
          </div>
          <div class="input-box2">
            <span class="details">確認密碼</span> <input minlength="5" type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          </div>
        </div>
        <div class="button">
            <button class="button" name="submit" href="login.php" class="btn">註冊</button>
          <p class="login-register-text">拥有账户？<a href="login.php">登入<a/></p>
        </div>
      </form>
    </div>
  </div>
</body>
<script>
</script>
</html>