<?php require 'checkuser.php' ?>

<!DOCTYPE html>
<html>
<body>
<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost", "dxr", "daxiongren", "myweb", "3306");
$id="".$_SESSION['id'];
$sql = "SELECT * FROM imageres WHERE userid='$id'";
$num = mysqli_num_rows(mysqli_query($con,$sql));
$image2 = $_POST['image2'];
if($image2 == ""){
	die("<script type='text/javascript'>alert('您还没有进行拍照哦！');location='scan.php';</script>");
}
$description=$_POST['description'];
$image=base64_decode(str_replace("data:image/png;base64,","",$image2)); 
$fp=fopen('./userimage/'.$_SESSION['id'].'_'.$num.'.png','w');
  fwrite($fp,$image);
  fclose($fp); 
  $path="userimage/".$_SESSION['id']."_".$num.".png";
  $sql = "INSERT INTO imageres (username,description,location,userid,position,path)
		VALUES('$_SESSION[name]','$description','$_SESSION[aim]','$_SESSION[id]','$_SESSION[aim]','$path')";
		$result = mysqli_query($con,$sql);
		echo "<script type='text/javascript'>alert('保存成功!');location='jingweidu.php';</script>";
?>
<img id="abc"/>
<script>
document.getElementById('abc').src='<?php echo $image2;?>';
	</script>
	
</body>
</html>