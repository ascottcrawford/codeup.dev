(function(){
    "use strict";

    // TODO: Create person object
    var person = {};
    	person.firstName = 'Scott';
    	person.lastName = 'Crawford';

    person.sayHello = function () {

	alert('Hello ' + person.firstName + ' ' + person.lastName);

};

	person.sayHello();

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();







// 'use strict';

// var person = {};

// person.first_name = 'Brandon';
// person.last_name = 'Dinesman';
// person.age = 500;
// person.height = 68;
// person.features = ['cruise control', 'no cup holders', 'blueteeth'];


// var person = {
// 	first_name: 'Brandon', 
// 	last_name: 'Dinesman',
// 	age: 500,
// 	height: 68,
// 	features: ['cruise control', 'no cup holders', 'blueteeth'],

// 	fullName: function() {
// 		return this.first_name + ' ' + this.last_name; 
// 	},

// 	humanReadableHeight: function () {
// 		var feet = Math.floor(this.height / 12);
// 		var inches = this.height % 12;

// 		return feet + ' foot ' + inches + ' inches';
// 	}

// };

// console.log(person.fullName());
// console.log(person.humanReadableHeight());
// console.log(person.first_name);
// console.log(person['first_name']);




