// 'use strict';


// do  {
// 	var confirmed = prompt('what is your name');
// 	if (confirmed != null) {
// 	confirmed = confirmed.trim();
// 	}
// } while (confirmed == null || confirmed == '');

// alert('Hello ' + confirmed);



// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
"use strict";

do {
	var confirmed = prompt('What is your name?');
	if (confirmed != null) {
		confirmed = confirmed.trim();
	}

	} while (confirmed == null || confirmed == '');

// TODO: Show an alert message that welcomes the user based on their input.

alert('Welcome ' + confirmed + ' to our site!');

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var questionConfirm = confirm('Do you like pizza?');
	if (questionConfirm) {
		console.log('We all like pizza, too.');
	} else {
		console.log('Oh sorry to hear that');
	}
