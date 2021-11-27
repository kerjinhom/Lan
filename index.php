<?php 

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="icon" href="https://cdn.discordapp.com/icons/637793729285062676/5f4a535464148e915f0156f1a7f53319.png?size=96">
  <meta charset="UTF-8">
  <title>Lan</title>
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="content">
      <form action="form1.php">
        <div class="user-details">
          <div class="input-box2">
            <span class="details">申请身份</span>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="下一页">
          
        </div>
      </form>
    </div>
  </div>
</body>
<a style="text-decoration: none;" href="logout.php">
  <div class="xyz">登出</div>
  </a>
<body>
  <div class="container">

    <div class="content">
      <form action="suggestion.php">
        <div class="user-details">
          <div class="input-box2">
            <span class="details">建议</span>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="下一页">
        </div>
      </form>
    </div>
  </div>
  
</body>

<script>

</script>

</html>