"use strict";


(function () {

	var myNameIs = 'Scott'; // TODO: Fill in your name here.

	// TODO:
	// Create a function called 'sayHello' that takes a parameter 'name'.

	function sayHello(name) {
		console.log("Hello " + name)
	}
	sayHello (myNameIs)




	// When called, the function should log a message that says hello from the passed in name.

	// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

	// Don't modify the following line
	// It generates a random number between 1 and 100 and stores it in random
	var random = Math.floor((Math.random()*100)+1);

	function isOdd(number) {
		console.log(number % 2 !==0 ? "The number " + number + " is odd" : "The number " + number + " is even" )
	}

	isOdd(random);

	// TODO:
	// Create a function called 'isOdd' that takes a number as a parameter.
	// The function should use the ternary operator to log a message.
	// The log should tell the number passed in and whether it is odd or not.

	// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.


	var random = Math.floor((Math.random()*10)+1);
	console.log(random);



	function numberMultiply(random) {
		for (var i=1; i<=10; i++) {
				console.log(random + "x" + i + "=" + random*i)
		}
	}
	numberMultiply(random);

})();





