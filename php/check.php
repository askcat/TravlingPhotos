<?php  
error_reporting(0);
$con = mysqli_connect("localhost", "dxr", "daxiongren", "myweb", "3306");#记得把这个密码进行加密
#mysqli_select_db($con, "myweb"); #用于更改连接的默认数据库,这里暂时没用上

$nameoreamil=$_POST["accountname"]; 
$password=$_POST["password"];

if($nameoreamil == "")  
{  
  
     echo "<script type='text/javascript'>alert('请填写用户名或邮箱');location='../login.html';</script>";  
           
  
}  
elseif($password == "")  
{  
  
    echo "<script type='text/javascript'>alert('请填写密码');location='../login.html';</script>";  
      
} 
else  
{   
	$sql = "SELECT * FROM customer WHERE (username = '$nameoreamil' or email = '$nameoreamil') and password= '$password'"; 
	$res = mysqli_query($con, $sql); //其他地方的这个没改
	$colum = mysqli_fetch_assoc($res); 

    if((($colum['username'] == $nameoreamil) || ($colum['email'] == $nameoreamil)) && ($colum['password'] == $password)){
			
		session_start();
        
		$_SESSION['id']=$colum['id'];
		$_SESSION['name']=$colum['username'];
		$_SESSION['Gender']=$colum['gender']; 
		$_SESSION['Mailbox']=$colum['email']; 
		
		echo"<script type='text/javascript'>alert('登录成功');location='../index.html';</script>"; 
    }     
    else  {
		echo "<script type='text/javascript'>alert('用户名或密码错误！');location='../login.html';</script>"; 
	} 
}  
?>