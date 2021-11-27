<?php

if (isset($_POST['submit'])) {
header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="zh-cn" dir="ltr">
  <head>
    <link rel="icon" href="https://cdn.discordapp.com/icons/637793729285062676/5f4a535464148e915f0156f1a7f53319.png?size=96">
    <meta charset="UTF-8">
    <title>Lan - 身份申请</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">申请身份</div>
    完成后请在 #🎫身份申请 按下表情符号
    <div class="content">
      <form action="index.php">
        <div class="button">
        <button class="button" name="submit" class="btn">提交</button>
        </div>
      </form>
      <a style="text-decoration: none;" href="index.php">
  <div class="xyz">返回</div>
  </a>
    </div>
  </div>

</body>
</html>
