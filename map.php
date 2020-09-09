<?php 
error_reporting(0); 
session_start(); 
$aim=$_GET['aim'];
$_SESSION['aim']=$aim;
$data=explode(',',$aim);
$lat1=(double)$data[0];
$lon1=(double)$data[1];
?>
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=n3GYfgdBL6iRnaOIPwlXn5W1Kd0Qavxi"></script>

    <style type="text/css">
        body, html,#container {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
    </style>
    <title>GPS转百度</title>
    <div align="center">
        <button onclick="window.location.href='scan.php'" style="width:280px; height:30px;">点击跳转到拍照页面</button> 
    </div>
    <div align="right">
        <a href="userinterface.php">
            返回首页
        </a>
    </div>
</head>
<body>
    <div id="container"></div>
</body>
</html>

<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "myweb", "3306");
$sql1 = mysqli_query($con,"select * from imageres");
?>

<script type="text/javascript">
    var map = new BMap.Map("container");
    <?php echo "var point = new BMap.Point($lon1,$lat1);"; ?>
        map.centerAndZoom(point,9);
        var marker = new BMap.Marker(point);

        var mapPoints = [
        <?php
        $info1 = mysqli_fetch_assoc($sql1);
        echo "{x:$lat1,y:$lon1,con:\"经度：$lon1<br>纬度：$lat1<br><img src='$info1[path]' /> <br>随笔：$info1[description]\",branch:\"$info1[username]\"},";
        while ($info1 = mysqli_fetch_assoc($sql1)){
            $data=explode(',',$info1["location"]);
            $lat=(double)$data[0];
            $lon=(double)$data[1];
            echo "{x:$lat,y:$lon,con:\"经度：$lon<br>纬度：$lat<br><img src='$info1[path]' /> <br>随笔：$info1[description]\",branch:\"$info1[username]\"},";
        }
        ?>
        ];

        //alert(mapPoints);
        map.addOverlay(marker);
        map.enableScrollWheelZoom(true);
        // 函数 创建多个标注
        function markerFun (points,label,infoWindows) {
            var markers = new BMap.Marker(points);
            map.addOverlay(markers);
            markers.setLabel(label);
            markers.addEventListener("click",function (event) {
                console.log("0001");
                map.openInfoWindow(infoWindows,points);//参数：窗口、点  根据点击的点出现对应的窗口
            });
        }
        for (var i = 0;i<mapPoints.length;i++) {
            var points = new BMap.Point(mapPoints[i].y,mapPoints[i].x);//创建坐标点
            var opts = {
                width : 260,     // 信息窗口宽度
                height: 400,     // 信息窗口高度
                title : "位置信息：" , // 信息窗口标题

            }
            var label = new BMap.Label(mapPoints[i].branch,{
                offset:new BMap.Size(25,5)
            });
            var infoWindows = new BMap.InfoWindow(mapPoints[i].con,opts);
            markerFun(points,label,infoWindows);
        }
</script>