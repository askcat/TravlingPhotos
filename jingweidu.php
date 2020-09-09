<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>jingweidu</title>
</head>

<body>
	
	<div id="abc"></div>
	<div id="abc1"></div>

    <script>
		var x=document.getElementById("abc");
		var y=document.getElementById("abc1");

		if (navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition);
		}
		else{
				alert("Geolocation is not supported by this browser.");
		}
		function showPosition(position){
			x.innerHTML=position.coords.latitude ;
			y.innerHTML=position.coords.longitude;
			var place = position.coords.latitude + "," + position.coords.longitude;
			//var aim = place;
			//alert(place);
			//alert(aim);
			location.href = "map.php?aim=" + place;
			}
	</script>
</body>
</html>