$( window ).resize(function(){

	if($(window).width() >1200){
		document.getElementById("video").style.paddingTop = "500px";
	}

	// if($(window).width() >1200 && $(window).width() < 1860 || $(window).width() == 1200){
	// 	document.getElementById("video").style.paddingTop = "10%";
	// }
	else if($(window).width() < 1200  && $(window).width() > 991){
		document.getElementById("video").style.paddingTop = "0px";
	}

	else if($(window).width() < 991){
		document.getElementById("video").style.paddingTop = "10%";
	}
	
});

if($(window).width() >1200){
	document.getElementById("video").style.paddingTop = "500px";
}

// if($(window).width() >1200 && $(window).width() < 1860 || $(window).width() == 1200){
// 	document.getElementById("video").style.paddingTop = "";
// }
else if($(window).width() < 1200 && $(window).width() > 991){
	document.getElementById("video").style.paddingTop = "0px";
}

else if($(window).width() < 991){
	document.getElementById("video").style.paddingTop = "10%";
}