var menuBackground = document.querySelector("nav ul");
var innerMenu = menuBackground.innerHTML;
menuBackground.innerHTML = generateMenuSVG() + innerMenu;

var homeTitles = document.querySelector("main>a");
if(homeTitles){
	homeTitles.innerHTML += generateHomeSVG();
}


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

function generateHomeSVG(){
	return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3200 240">' +
		'<path fill="rgb('+ getGrayColor() +')" d="M80 0v80h-80"/>' +
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
		'<path fill="rgb('+ getGrayColor() +')" d="M80 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M80 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M240 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M240 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M400 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M400 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M560 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M560 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M720 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M720 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M880 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M880 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1040 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1040 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1200 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1200 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1360 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1360 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1520 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1520 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1680 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1680 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1840 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1840 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2000 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2000 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2160 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2160 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2320 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2320 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2480 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2480 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2640 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2640 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2800 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2800 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2960 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2960 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3120 160v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3120 160h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M160 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M160 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M320 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M320 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M480 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M480 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M640 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M640 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M800 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M800 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M960 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M960 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1120 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1120 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1280 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1280 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1440 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1440 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1600 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1600 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1760 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1760 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1920 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1920 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2080 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2080 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2240 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2240 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2400 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2400 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2560 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2560 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2720 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2720 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2880 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2880 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3040 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3040 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3200 240h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M0 240v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M160 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M160 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M320 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M320 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M480 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M480 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M640 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M640 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M800 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M800 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M960 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M960 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1120 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1120 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1280 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1280 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1440 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1440 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1600 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1600 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1760 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1760 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1920 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1920 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2080 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2080 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2240 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2240 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2400 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2400 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2560 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2560 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2720 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2720 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2880 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2880 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3040 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3040 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3200 80v80h-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M0 80h80v80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M240 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M240 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M400 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M400 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M560 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M560 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M720 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M720 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M880 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M880 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1040 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1040 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1200 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1200 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1360 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1360 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1520 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1520 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1680 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1680 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1840 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M1840 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2000 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2000 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2160 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2160 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2320 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2320 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2480 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2480 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2640 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2640 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2800 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2800 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2960 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M2960 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3120 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M3120 160v-80h80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M80 160h-80v-80"/>' +
		'<path fill="rgb('+ getGrayColor() +')" d="M80 160v-80h80"/>' +
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
var searchButton = document.querySelector("header nav ul li form input[type=submit]");
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