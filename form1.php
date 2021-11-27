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
        <div>管理者 加入伺服器至少10月份</div>
        <div>Youtuber 擁有150訂閱以上，绑定Youtube</div>
        <div>Roblox studio 擁有roblox開發者認證</div>
        <div>亞特蘭提斯身分證 加巧白白Discord伺服器至少10月份</div>
    <div class="content">
      
      <form action="form2.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">管理員</span>
            <input type="checkbox" id="admin">
          </div>
          <div class="input-box">
            <span class="details">Youtuber</span>
            <input type="checkbox" id="YTB">
          </div>
          <div class="input-box">
            <span class="details">Roblox studio</span>
            <input type="checkbox" id="RBX">
          </div>
          <div class="input-box">
            <span class="details">亞特蘭提斯身分證</span>
            <input type="checkbox" id="ROLE">
          </div>
        </div>
        <div class="button">
           <button class="button" name="submit" class="btn">下一页(1/2)</button>
          <script src="index.js"></script>
        </div>
      </form>
      <a style="text-decoration: none;" href="index.php">
  <div class="xyz">返回</div>
  </a>
    </div>
  </div>
  
  
</body>
</html>