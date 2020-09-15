function onTake(){	
    var file = document.getElementById("btn_camera").files[0];  
     var reader = new FileReader();
    reader.οnlοad=function(e) {  
    document.getElementById("image").src = e.target.result;	
    }
    reader.readAsDataURL(file);
    
}