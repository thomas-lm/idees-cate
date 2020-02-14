function stopProp(event){
	if (event.stopPropagation) {
	  event.stopPropagation();
	}
	event.cancelBubble = true;
	// event est l'objet Event
	if (event.preventDefault) {
	  event.preventDefault();
	}
	event.returnValue = false;
}

function previewLien(event){
	stopProp(event);
	var src = "";
	var target = event.currentTarget || event.target || event.srcElement;
	src = target.getAttribute("href");
	if(!src){
		src = target.parentNode.getAttribute("href");
	}
	
	document.getElementById("img-image-preview").setAttribute("src",src);
	document.getElementById("bt-image-print").setAttribute("href",src+"/print");
	openPreview();
	centerPreview();
}

function closePreview(){
	document.getElementById("image-screen").style.display = "none";
}

function openPreview(){
	document.getElementById("image-screen").style.display = "block";
}

function centerPreview(){
	var w = window,d = document,e = d.documentElement,
   g = d.getElementsByTagName('body')[0],
   x = w.innerWidth || e.clientWidth || g.clientWidth;
	var el = d.getElementById("image-content");
	var l = (x-el.clientWidth)/2;
	el.style.left = l+"px";
}

function initMignature(){
	var listeLienImage = document.querySelectorAll("#content a.lien-image");
	for(var i=0;i<listeLienImage.length;i++){
		var lien = listeLienImage[i];
		
		if (lien.addEventListener){
		  lien.addEventListener('click', previewLien, false);
		} else if (lien.attachEvent) {
		  lien.attachEvent('onclick', previewLien);
		}
	}
}

function changePage(page,urlBase){
	window.location = urlBase+page+".html";
}

function initScroll(){
	window.onscroll = function(e){
		if(window.pageYOffset){
			//regarder la position de la page
			if(window.pageYOffset>150){
				document.getElementById("main-nav-content").style.position = "fixed";
				document.getElementById("main-nav-content").style.top = "-5px";
				document.getElementById("main-nav-content").style.height = "37px";
				document.getElementById("main-nav-content").style.backgroundColor = "#4382AB";
			} else {
				document.getElementById("main-nav-content").style.position = "";
				document.getElementById("main-nav-content").style.top = "";
				document.getElementById("main-nav-content").style.height = "";
				document.getElementById("main-nav-content").style.backgroundColor = "";
			}
		} else {
			if(document.documentElement.scrollTop>150){
				document.getElementById("main-nav-content").style.position = "fixed";
				document.getElementById("main-nav-content").style.top = "-5px";
				document.getElementById("main-nav-content").style.height = "37px";
				document.getElementById("main-nav-content").style.backgroundColor = "#4382AB";
			} else {
				document.getElementById("main-nav-content").style.position = "";
				document.getElementById("main-nav-content").style.top = "";
				document.getElementById("main-nav-content").style.height = "";
				document.getElementById("main-nav-content").style.backgroundColor = "";
			}
		}
	}
}