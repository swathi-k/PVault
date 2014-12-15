/**
 * 
 */
function getElementsByClass(className) {
	var all = document.all ? document.all : document.getElementsByTagName('*');
	var elements = new Array();
	for (var e = 0; e < all.length; e++) {
		if (all[e].className == className)
			elements[elements.length] = all[e];
		}
	return elements;
}

function popup(elmClass,width,height) {
	var popupElms = getElementsByClass(elmClass);
	for (var i = 0; i < popupElms.length; i++) {
		var popupElm = popupElms[i];
		popupElm.onclick = function() {
			var popupElmURL = this.getAttribute('href');
			var popupElmTitle = this.getAttribute('title');
			if (width && height) {
				var windowSize = 'width=' + width + ',' + 'height=' + height;
			}
			var popup = window.open(popupElmURL,popupElmTitle,windowSize);
			return false;
		}
	}
}

window.onload = function() {
	popup('popup',500,300);
}