if($(window).width() >1860){
	document.getElementById("video").style.paddingTop = "500px";
}

if($(window).width() >1200 && $(window).width() < 1860 || $(window).width() == 1200){
	document.getElementById("video").style.paddingTop = "550px";
}
else if($(window).width() < 1200){
        document.getElementById("video").style.paddingTop = "0px";
}