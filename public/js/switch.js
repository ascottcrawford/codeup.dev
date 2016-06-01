"use strict";

var cost = 60
var discount1 = .1
var discount2 = .25
var discount3 = .35
var discount4 = .5
var discount5 = 1


var luckyNumber = Math.floor(Math.random()* 6);

switch (luckyNumber) {
	case (1):
	console.log("1 pays $" + (cost - (cost*discount1)));
	break;
	case (2):
	console.log("2 pays $" + (cost - (cost*discount2)));
	break;
	case (3):
	console.log("3 pays $" + (cost - (cost*discount3))); 
	case (4):
	console.log("4 pays $" + (cost - (cost*discount4)));
	break;
	case (5):
	console.log("You get it for free.");
	break;
	default:
	console.log("You get no discount.");
}


var randomNumber = (Math.floor(Math.random()* 12) + 1);
switch (randomNumber) {
	case (1):
	console.log("January");
	break;
	case (2):
	console.log("February");
	break;
	case (3):
	console.log("March");
	break;
	case (4):
	console.log("April");
	break;
	case (5):
	console.log("May");
	break;
	case (6):
	console.log("June");
	break;
	case (7):
	console.log("July");
	break;
	case (8):
	console.log("August");
	break;
	case (9):
	console.log("September");
	break;
	case (10):
	console.log("October");
	break;
	case (11):
	console.log("November");
	break;
	default:
	console.log("December");
}



