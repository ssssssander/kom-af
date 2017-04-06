function getBlueColor(){
	var red,green,blue=255;
	red = Math.floor(Math.random()*16);
	green = Math.floor(Math.random()*256);
	return {r:red,g:green,b:blue}
}
