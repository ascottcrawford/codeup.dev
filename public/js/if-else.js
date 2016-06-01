"use strict";

var avgGrade = (70+80+95)/3

if (avgGrade > 80) {
	console.log("You're Awesome")
} else {
	console.log("You need to practice more.")
}

var discount = .65
var cameronSpend = 180
var ryanSpend = 250
var georgeSpend = 320
var spendForDiscount = 200

if (cameronSpend > spendForDiscount) {
	console.log(cameronSpend*discount + " is what Cameron spent")
} else {
	console.log(cameronSpend + " is what Cameron spent")
}

if (ryanSpend > spendForDiscount) {
	console.log(ryanSpend*discount + " is what Ryan spent");
} else {
	console.log(ryanSpend + "is what Ryan spent")
}

if (georgeSpend > spendForDiscount) {
	console.log(georgeSpend*discount + " is what George spent");
} else {
	console.log(georgeSpend + " is what George spent")
}


var flipACoin = Math.floor(Math.random()*2);

console.log(flipACoin); 

if (flipACoin) {
	console.log("Buy A House");
} else {
	console.log("Buy a Car");
} 

flipACoin ? console.log("Number is 1, Buy A House") : console.log("Number is 0, Buy A Car"); 
