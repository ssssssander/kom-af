
var activeItem = document.getElementsByClassName("active")[0];
var accentItems = document.getElementsByClassName("accent");

activeItem.innerHTML += generateSVGLine();
for(var i = 0, ilen = accentItems.length;i<ilen;++i){
	accentItems[i].innerHTML += generateSVGAccent();
}


function generateSVGAccent(){
	return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M0 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M24 48H0V24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M24 48V24h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M0 24h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M24 0v24H0"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M0 72V48h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M48 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M72 0v24H48"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M24 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M48 24H24V0"/>' +
		'</svg>';
}

function generateSVGLine(){
	return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 312 24">' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M0 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M24 0h24v24H24zm0 24H0V0"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M48 0v24H24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M72 24H48V0"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M96 24H72V0M48 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M72 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M96 24h24V0"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M144 24h-24V0M96 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M120 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M168 0v24h-24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M192 0v24h-24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M216 24h-24V0"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M216 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M264 24h-24V0"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M264 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M288 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M144 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M168 24V0h24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M192 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M240 0v24h-24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M240 0h24v24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M288 0v24h-24"/>' +
		'<path fill="rgb('+ getBlueColor().r +','+ getBlueColor().g +','+ getBlueColor().b +')" d="M312 0v24h-24"/>' +
		'</svg>';
}

function getBlueColor(){
	var red,green,blue=255;
	red = Math.floor(Math.random()*16); // 0 tot 15
	// green = Math.floor(Math.random()*256); // 0 tot 255
	green = Math.floor((Math.random()*91) + 120); // 120 tot 210
	return {r:red,g:green,b:blue}
}