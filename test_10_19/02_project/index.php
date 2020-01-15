<?php include_once "user.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<header>
		<div>
      <?php
      session_start();
      if (isset((15))) {
        echo "欢迎 " . (15);
      } else {
        echo "<a href='login.php'>未登录</a>";
      }
      ?> 
    </div>
	</header>
	<article>
    <?php
    $user = new User();
    $users = (16);
    ?>
      <table border="1">
			<tr>
				<th>序号</th>
				<th>帐号</th>
				<th>密码</th>
				<th>手机号</th>
			</tr>
        <?php (17) ?>
        <tr>
        <td><?php echo $u["id"];?></td>
				<td>(18)</td>
				<td><?php echo $u["password"];?></td>
				<td><?php echo (19);?></td>
			</tr>      
        (20)
      </table>
	</article>
</body>
</html>
