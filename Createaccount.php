<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>注册</title>
	
</head>
<body>
	<div>
		<h1>去旅游!</h1>
		<div>
			<form method="post" action="register.php">
				<div>
					<input name="newaccountname" title="请输入用户名" maxlength="320"  placeholder="用户名" />
					<input name="newpassword" title="请输入密码" maxlength="320" placeholder="密码" />
					<input name="yourname" title="您的名字" maxlength="320" placeholder="您的名字" />
					<form>
						<input type="radio" name="gender" value="男" /> 男
						<input type="radio" name="gender" value="女"> 女
					</form>
					<input name="mail" title="请输入电子邮箱" placeholder="邮箱" />
					<button >注册</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>