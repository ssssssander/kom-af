
var accentItems = document.querySelectorAll("main.nieuws article a,main.scholen a,main.vrije_tijd ul li a,main.testimonials ul li a,main.zoeken ul li a");
var searchForm = document.querySelector("header nav ul li form");
var searchButton = document.querySelector("header nav ul li form input[type=image]");
var noAccent = true;
var first = true;

if(document.getElementsByClassName("active").length > 0){
	var activeItem = document.getElementsByClassName("active")[0];
	activeItem.innerHTML += generateSVGLine();
}
for(var i = 0, ilen = accentItems.length;i<ilen;++i){
	if(randomYesOrNo()){
		accentItems[i].className = "accent";
		accentItems[i].innerHTML += generateSVGAccent();
		noAccent = false;
	}
}
if(noAccent && accentItems.length > 0){
	var randomPlace = Math.floor(Math.random()*accentItems.length);
	accentItems[randomPlace].className = "accent";
	accentItems[randomPlace].innerHTML += generateSVGAccent();
	noAccent = false;
}

searchButton.addEventListener("click", showSearch);

function randomYesOrNo(){
	return Math.floor(Math.random()*2) === 1;
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
	green = Math.floor((Math.random()*91) + 120); // 120 tot 210
	return {r:red,g:green,b:blue} // 255
}

function showSearch(e){
	if(first){
		e.preventDefault();
		var startContent = searchForm.innerHTML;
		var input = document.createElement("input");
		input.type="text";
		input.name="zoek";
		input.placeholder="zoeken";
		input.autofocus = true;
		searchForm.innerHTML = "";
		searchForm.appendChild(input);
		searchForm.innerHTML += startContent;
		var menu = document.querySelectorAll("nav ul li");
		for(var i = 0,ilen = menu.length - 1;i< ilen;++i){
			menu[i].remove();
		}
		first = false;
	}
}