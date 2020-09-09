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
		<a href="userinterface.php">  返回首页 </a>
	</div>
		<?php
		error_reporting(0);
		$con = mysqli_connect("localhost", "root", "root", "myweb", "3306");
		$keywords = $_POST['keyword'];
		$sql1 = mysqli_query($con,"select * from imageres where (description like '%$keywords%')");//获取查询结果
		$num_rows = mysqli_num_rows($sql1);//获取结果集中的行量
		if ($num_rows != 0) {
			if ($keywords != "") {

				while ($info1 = mysqli_fetch_assoc($sql1)) { //把结果集转换为数组形式

					echo "<ul>";
					echo "<li align='center'>";
					echo "<img src='$info1[path]' />";
					echo "<div align='center' style='bottom:0';>";
					echo "<p><h3>$info1[description]</h3></p>";
					echo "<button onclick=\"window.location.href='jingweidu.php'\">跳转到地图</button>";
					echo "</div>";
					echo "</li>";
					echo "</ul>";
					echo "</br>";

				}
			}
		} 
		else 
	    echo "<script>alert('There is no this place');location='userinterface.php'</script>";
		
		?>
		<script  language="javascript" type="text/javascript">function viewin(Str) {
	var aimname = Str;
	location.href = 'locationpoint.php?aimname=' + aimname;
}</script>
	</body>
</html>