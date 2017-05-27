var menuBackground = document.querySelector("nav ul");
var inner = menuBackground.innerHTML;
menuBackground.innerHTML = generateMenuSVG() + inner;

function generateMenuSVG(){
	return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3200 80">' +
		'<path fill="rgb('+ getGrayColor() +')" d="M80 0v80h-80"></path>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M80 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M240 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M240 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M400 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M400 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M560 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M560 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M720 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M720 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M880 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M880 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1040 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1040 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1200 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1200 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1360 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1360 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1520 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1520 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1680 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1680 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1840 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1840 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2000 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2000 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2160 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2160 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2320 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2320 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2480 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2480 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2640 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2640 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2800 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2800 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2960 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2960 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3120 0v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3120 0h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M160 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M160 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M320 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M320 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M480 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M480 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M640 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M640 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M800 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M800 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M960 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M960 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1120 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1120 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1280 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1280 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1440 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1440 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1600 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1600 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1760 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1760 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1920 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1920 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2080 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2080 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2240 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2240 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2400 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2400 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2560 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2560 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2720 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2720 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2880 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2880 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3040 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3040 80v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3200 80h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M0 80v-80h80"/>' +
		'</svg>';
}

function getGrayColor(){
	var grijstint;
	var max = 150;
	var min = 100;
	grijstint = Math.floor((Math.random()*(max-min+1))+ min); // 100 tot 150
	return grijstint+","+grijstint+","+grijstint;
}


// search
var searchForm = document.querySelector("header nav ul li form");
var searchButton = document.querySelector("header nav ul li form input[type=image]");
var first = true;
searchButton.addEventListener("click", showSearch);
function showSearch(e){
    if(first){
        e.preventDefault();
        var startContent = searchForm.innerHTML;
        document.querySelector("header nav").classList.add("zoek");
        var input = document.createElement("input");
        input.type="text";
        input.name="zoek";
        input.placeholder="Zoeken";
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