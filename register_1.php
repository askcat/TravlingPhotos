<?php
error_reporting(0);
$con = mysqli_connect("localhost", "root", "root", "myweb", "3306");
$name = $_POST['newaccountname'];
$password = $_POST['newpassword'];
$gender = $_POST['gender'];
$mail = $_POST['mail'];
if ($name == "") {
	//echo "Please fill in account name";
	echo "<script type='text/javascript'>alert('请填写用户名');location='Createaccount.php';</script>";
} elseif ($password == "") {

	//echo "Please fill in password<br><a href='Createaccount.php'>return</a>";
	echo "<script type='text/javascript'>alert('请填写密码');location='Createaccount.php';</script>";

} elseif ($gender == "") {

	//echo "Please fill in password<br><a href='Createaccount.php'>return</a>";
	echo "<script type='text/javascript'>alert('请选择性别（男或女）');location='Createaccount.php';</script>";

} elseif ($mail == "") {

	//echo "Please fill in password<br><a href='Createaccount.php'>return</a>";
	echo "<script type='text/javascript'>alert('请填写电子邮箱');location='Createaccount.php';</script>";

} else {
	if ($name) {

		$sql = "SELECT * FROM customer WHERE Username = '$name'";
		$res = mysqli_query($con,$sql);
		$colum = mysqli_fetch_assoc($res);

	}
	if (($colum['Username'] == $name)) {
		echo "<script type='text/javascript'>alert('用户名已存在');location='Createaccount.php';</script>";
	} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		echo "<script type='text/javascript'>alert('不是正确的电子邮箱');location='Createaccount.php';</script>";
	} else {

		$sql = "INSERT INTO customer (Username,Password,Gender,eMail)
		VALUES('$_POST[newaccountname]','$_POST[newpassword]','$_POST[gender]','$_POST[mail]')";
		$result = mysqli_query($con,$sql);

	}

	session_start();
	$_SESSION["admin"] = true;
	$_SESSION['Username'] = $_POST['newaccountname'];
	echo "<script type='text/javascript'>alert('注册成功!');location='/';</script>";
}
?>  