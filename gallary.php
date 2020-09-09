<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>
		Go to Tour!
	</title>
</head>
<body background="img/009.jpg" style="background-repeat: no-repeat;background-size:cover">
	<div align="right">
		<a href="userinterface.php">返回首页</a>
	</div>
	<?php
		error_reporting(0);
		session_start();
		$con = mysqli_connect("localhost", "root", "root", "myweb", "3306");
		$sql1 = mysqli_query($con,"select * from imageres");
		while ($info1 = mysqli_fetch_assoc($sql1)) {		
			echo "<div align='center'>";
			echo "<img src='$info1[path]' />";
			echo "<div align='center' style='bottom:0';>";
			echo "<p><h3>用户$info1[username]的随笔：$info1[description]</h3></p>";
			echo "</div>";
			echo "</div>";
			echo "</br>";
		}
	?>
</body>
</html>