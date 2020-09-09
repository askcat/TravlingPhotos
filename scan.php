<!doctype html>

<html>
	<?php 
error_reporting(0); 
session_start(); 
//$aim=$_GET['aim'];
//_SESSION['aim']=$aim;//获取map.php传过的目标
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>拍照!</title>
</head>
<body background="img/012.jpg" style="background-repeat: no-repeat;background-size:cover">
	<header>
			<div style="float:right">
				<a href="userinterface.php">
					返回
				</a>
			</div>
			<h1>
				<div align="center">
					Take you photos!
				</div>
				<h1>
				<div>
				</div>

                <div align="center">

    <video id="video" autoplay width="240px" height="300px"><p>Your browserdoes not support the canvas element!</p></video>
    </div>
    <div align="center">
    <button id="capture" style="width:280px; height:30px;">点击抓拍</button>
     </div>
    <br>
    <div align="center">
    <img id="pic">
    </div>
    <canvas style="display: none;" id="paint" width="240" height="300"><p>Your browserdoes not support the canvas element!</p></canvas>
    <div id="picture" align="center" style="display:none;">
    </div>

    <script>
var video = document.getElementById('video');
var canvas = document.getElementById('paint');
var ctx = canvas.getContext('2d');

// 想要获取一个最接近 240*240 的相机分辨率
var constraints = { audio: false, video: { width: 240, height: 240 } }; 
/*
navigator.webkitGetUserMedia(
    {"video": true},
    function (stream) {
    	
        video.src = window.URL.createObjectURL(stream);
        video.play();
        
    },
    function () {
        alert('your browser does not support getUserMedia');
    }
);//手机端用这个
*/


navigator.mediaDevices.getUserMedia(constraints)
.then(function(mediaStream) {
  var video = document.querySelector('video');
  video.srcObject = mediaStream;
  video.onloadedmetadata = function(e) {
    video.play();
  };
})
.catch(function(err) { console.log(err.name + ": " + err.message); }); //电脑端用这个

    	var snapshot = function () {
        ctx.drawImage(video, 0, 0,240,300);
        document.getElementById('pic').src = canvas.toDataURL();//不写参数默认是png格式
        var image1=canvas.toDataURL();//不写参数默认是png格式
document.getElementById('image').value=image1;
};
var btnCapture = document.getElementById('capture');
btnCapture.addEventListener('click', snapshot, false);

    </script>

    <div align="center">
    <form  method="post" action="save.php">
    <input style="width:280px; height:30px;display:none;" value="" id="image" name="image2" />
	随 笔<br> 
	<textarea cols="40" rows="5" id="password" value="" name="description" placeholder="分享一下今天的新鲜事吧！"></textarea>
	<br>
    <button type="submit"  style="width:280px; height:30px;">保存照片</button>
    </form>
     </div>

</body>
</html>