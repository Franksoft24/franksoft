function headerTitle(text){
	document.getElementById('title').innerHTML=text;
}
function SendMessagePop(){
	var div = document.getElementById('SendMessagePop').style;
	if (screen.width > "1252") {
		if (div.display != "block"){
			div.display = "block";
		}else{
			div.display = "none";
		}
	}else{
		location_ = document.getElementById('location').value;
		window.location = "../MessageMobile?location="+location_;
	}
	
}
function assignlocation(where){
	document.getElementById("location").value = where;
}