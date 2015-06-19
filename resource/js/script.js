function headerTitle(text){
	document.getElementById('title').innerHTML=text;
}
function SendMessagePop(){
	var div = document.getElementById('SendMessagePop').style;
	if (div.display != "block"){
		div.display = "block";
	}else{
		div.display = "none";
	}
}function assignlocation(where){
	document.getElementById("location").value = where;
}