<?php

session_start();
unset($_SESSION['id']); #当用户点击退出后 删除session中的id值
echo "<script type='text/javascript'>location='/';</script>";

?>
