<?php
error_reporting(0);
$con = mysqli_connect("localhost", "dxr", "daxiongren", "myweb", "3306");
$name = $_POST['newaccountname'];
$password = $_POST['newpassword'];
$gender = $_POST['gender'];
$mail = $_POST['mail'];
if ($name == "") {
	//echo "Please fill in account name";
	echo "<script type='text/javascript'>alert('请填写用户名');location='../register.html';</script>";
} elseif ($password == "") {

	//echo "Please fill in password<br><a href='../register.html'>return</a>";
	echo "<script type='text/javascript'>alert('请填写密码');location='../register.html';</script>";

} elseif ($gender == "") {

	//echo "Please fill in password<br><a href='../register.html'>return</a>";
	echo "<script type='text/javascript'>alert('请选择性别（男或女）');location='../register.html';</script>";

} elseif ($mail == "") {

	//echo "Please fill in password<br><a href='../register.html'>return</a>";
	echo "<script type='text/javascript'>alert('请填写电子邮箱');location='../register.html';</script>";

} else {
	if ($name) {

		$sql = "SELECT * FROM customer WHERE Username = '$name'";
		$res = mysqli_query($con,$sql);
		$colum = mysqli_fetch_assoc($res);

	}
	if (($colum['username'] == $name)) {
		echo "<script type='text/javascript'>alert('用户名已存在');location='../register.html';</script>";
	} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		echo "<script type='text/javascript'>alert('不是正确的电子邮箱');location='../register.html';</script>";
	} else {

		$sql = "INSERT INTO customer (username,password,gender,email)
		VALUES('$_POST[newaccountname]','$_POST[newpassword]','$_POST[gender]','$_POST[mail]')";
		$result = mysqli_query($con,$sql);

	}

	/*
	session_start();
	$_SESSION["admin"] = true;
	$_SESSION['username'] = $_POST['newaccountname'];
	*/
	echo "<script type='text/javascript'>alert('注册成功!');location='../login.html';</script>";
}
?>  