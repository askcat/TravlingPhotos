<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>打卡</title>
    <script src="js/scan.js"></script>
</head>
<body>
    <p>open camer demo</p>
	<form id="take_picture">
        <input id="btn_camera" type="file" accept="image/*" capture="camera" οnchange="onTake()" />
	</form>
	<img id="image" width="300" height="500" />
    

    <div align="center">
        <form  method="post" action="save.php">
        <input style="width:280px; height:30px;display:none;" value="" id="image" name="image2" />
        随 笔<br> 
        <textarea cols="40" rows="5" id="password" value="" name="description" placeholder="分享一下今天的新鲜事吧！"></textarea>
        <br>
        <button type="submit"  style="width:280px; height:30px;">保存照片</button>
        </form>
     </div>
<script src="js/scan.js"></script>
</body>
</html>