<?php
session_start();

if(!isset($_SESSION['id'])){#检查用户的session中的id值是否存在，存在则是已登录，否则是未登录，不能访问该页面
	die("<script type='text/javascript'>alert('请先登录哦！');location='../login.html';</script>");
}
else{
	//这里还要写一个用户的功能界面
	echo "<script type='text/javascript'>;location='../userfunction.html';</script>";
}

?>