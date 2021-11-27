<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['username'])) {
header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$title = $_POST['title'];
	$content = $_POST['content'];

	if ($title == $content) {
		$sql = "SELECT * FROM suggestion WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO suggestion (username, title, content)
					VALUES ('$username', '$title', '$content')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('发送成功')</script>";
				$username = "";
				$title = "";
				$content = "";
        header("Location: index.php");
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
  <title>Lan - 建議</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="title">
        建議
    </div>
    
    <div>(内容被洗白代表已提交)</div>
    <div class="content">
      <form action="">
        <div class="user-details">
          <div class="input-box2">
            <span class="details">標題</span> <input type="text" name="title" value="<?php echo $title; ?>" id="name" required>
          </div>
          <div class="input-box2">
            <span class="details">詳細內容</span> <input type="text" name="content" value="<?php echo $content; ?>" id="roblox" required>
          </div>
        </div>
        <div class="button">
          <button class="button" name="submit" href="index.php" onclick="send()">提交</button>
          <script src="javascript.js"></script>
          
        </div>
      </form>
      <a style="text-decoration: none;" href="index.php">
  <div class="xyz">返回</div> 
  </a>
    </div>
  </div>
</body>
<script>

</script>
</html>