// JavaScript Document
var today = new Date();
var hoursNow = today.getHours();
var greeting;
var eltag = document.getElementById("greeting");

switch(hoursNow) {
	case (hoursNow > 0 && hoursNow < 12):
		greeting = 'Good morning!';
		break;
		
	case hoursNow > 12 && hoursNow < 18:
		greeting = 'Good afternoon!';
		break;
		
	case (hoursNow > 18):
		greeting = 'Good evening!';
		break;
		
	default:
		greeting = 'Welcome!';
		break;
}

eltag.innerHTML = '<h3>' + greeting + '</h3>';
//document.write('<h3>' + greeting + '</h3>');
