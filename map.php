<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>浏览器精确定位</title>
      <link rel="stylesheet" href="https://a.amap.com/jsapi_demos/static/demo-center/css/demo-center.css" />
    <style>
        html,body,#container{
            height:100%;
        }
        .info{
            width:26rem;
        }
    </style>
<body>
<div id='container'></div>
<div class="info">
    <h4 id='status'></h4><hr>
    <p id='result'></p><hr>
    <p >由于众多浏览器已不再支持非安全域的定位请求，为保位成功率和精度，请升级您的站点到HTTPS。</p>
</div>
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=c851d0c215fce136033eb4ff073ef8a0"></script>
<script type="text/javascript">
    var map = new AMap.Map('container', {
        resizeEnable: true
    });
    AMap.plugin('AMap.Geolocation', function() {
        var geolocation = new AMap.Geolocation({
            enableHighAccuracy: true,//是否使用高精度定位，默认:true
            timeout: 10000,          //超过10秒后停止定位，默认：5s
            buttonPosition:'RB',    //定位按钮的停靠位置
            buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
            zoomToAccuracy: true,   //定位成功后是否自动调整地图视野到定位点
  
        });
        map.addControl(geolocation);
        geolocation.getCurrentPosition(function(status,result){
            if(status=='complete'){
                onComplete(result)
            }else{
                onError(result)
            }
        });
    });
    //解析定位结果
    function onComplete(data) {
        document.getElementById('status').innerHTML='定位成功'
        var str = [];
        str.push('定位结果：' + data.position);
        str.push('定位类别：' + data.location_type);
        if(data.accuracy){
             str.push('精度：' + data.accuracy + ' 米');
        }//如为IP精确定位结果则没有精度信息
        str.push('是否经过偏移：' + (data.isConverted ? '是' : '否'));
        document.getElementById('result').innerHTML = str.join('<br>');
    }
    //解析定位错误信息
    function onError(data) {
        document.getElementById('status').innerHTML='定位失败'
        document.getElementById('result').innerHTML = '失败原因排查信息:'+data.message;
    }

    var signzone = [121.52625, 31.66925];//设置的签到点
console.log(signzone);
//计算当前位置与考勤点距离
var distance = AMap.GeometryUtil.distance(getposition,signzone).toFixed(2);
  
//document.getElementById('distance').innerHTML = distancestr;
console.log(distance);
             
if (distance <= 1000) {
//在范围内
    //数据操作
} else {
//不在范围内
    //数据操作
}
//绘制签到范围
  
var circle = new AMap.Circle({
    center: signzone,
    radius: 100, //签到范围半径
    borderWeight: 1,
    strokeOpacity: 1,
     
    strokeOpacity: 0.2,
    fillOpacity: 0.4,
})
  
circle.setMap(map)
// 缩放地图到合适的视野级别
map.setFitView([ circle ])
  
var circleEditor = new AMap.CircleEditor(map, circle)
</script>
</body>
</html>