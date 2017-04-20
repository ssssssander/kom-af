function randomYesOrNo(){return 1===Math.floor(2*Math.random())}function generateSVGAccent(){return'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72"><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M0 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M24 48H0V24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M24 48V24h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M0 24h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M24 0v24H0"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M0 72V48h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M48 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M72 0v24H48"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M24 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M48 24H24V0"/></svg>'}function generateSVGLine(){return'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 312 24"><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M0 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M24 0h24v24H24zm0 24H0V0"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M48 0v24H24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M72 24H48V0"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M96 24H72V0M48 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M72 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M96 24h24V0"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M144 24h-24V0M96 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M120 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M168 0v24h-24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M192 0v24h-24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M216 24h-24V0"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M216 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M264 24h-24V0"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M264 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M288 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M144 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M168 24V0h24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M192 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M240 0v24h-24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M240 0h24v24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M288 0v24h-24"/><path fill="rgb('+getBlueColor().r+","+getBlueColor().g+","+getBlueColor().b+')" d="M312 0v24h-24"/></svg>'}function getBlueColor(){var l,e;return l=Math.floor(16*Math.random()),e=Math.floor(91*Math.random()+120),{r:l,g:e,b:255}}var activeItem=document.getElementsByClassName("active")[0],accentItems=document.querySelectorAll("main.nieuws article a,main.scholen a,main.vrije_tijd ul li a"),searchButton=document.getElementsByClassName("main article a svg:first-child");activeItem.innerHTML+=generateSVGLine();for(var i=0,ilen=accentItems.length;i<ilen;++i)randomYesOrNo()&&(accentItems[i].innerHTML+=generateSVGAccent());