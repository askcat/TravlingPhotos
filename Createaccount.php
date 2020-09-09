<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body background="img/login.jpg" style="background-repeat: no-repeat;background-size:cover">
	<div align="center">
		<h1>去旅游!</h1>
		<div style="align-content:flex-end;">
			<form method="post" action="register_1.php">
				<div align="center" style="position:relative">
					<input style="width:280px; height:30px;"id="newaccountname" value="" name="newaccountname" title="请输入用户名" maxlength="320" tyoe="accountname" placeholder="用户名" />
					<input style="width:280px; height:30px;"id="newpassword" value="" name="newpassword" title="请输入密码" maxlength="320" tyoe="password" placeholder="密码" />
					<input style="width:280px; height:30px;"id="yourname" value="" name="yourname" title="您的名字" maxlength="320" tyoe="name" placeholder="您的名字" />
					<form>
						<input type="radio" name="gender" value="男" /> 男
						<input type="radio" name="gender" value="女"> 女
					</form>
					<input style="width:280px; height:30px;"id="Email" value="" name="mail" title="请输入电子邮箱" maxlength="320" type="text" placeholder="邮箱" />
					<button style="width:280px; height:30px;"type="submit" id="submit">注册</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>