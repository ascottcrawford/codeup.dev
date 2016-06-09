'use-strict';

document.getElementById("add-grade").disabled = true;
document.getElementById("calculate-average").disabled = true;


var studentName = document.getElementById("student-name");

var saveButton = document.getElementById("save-name");

saveButton.addEventListener('click', function () {

	studentName.innerText = document.getElementById('name').value;
	student.name = document.getElementById('name').value;
	document.getElementById("add-grade").disabled = false;
	document.getElementById("calculate-average").disabled = false;

  }, false);


var addContinue = document.getElementById('add-grade');

addContinue.addEventListener('click', function () {

	var table = document.getElementById('grades');
	var row = table.insertRow(0);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	cell1.innerHTML = document.getElementById('subject').value;
	cell2.innerHTML = document.getElementById('grade').value;
	student.addSubject(
		document.getElementById('subject').value,
		Number(document.getElementById('grade').value)
	);


  }, false);

var addCalculate = document.getElementById('calculate-average');

addCalculate.addEventListener('click', function () {

	var average = student.calculateAverage();
	var studentAverage = document.getElementById('student-average');
	studentAverage.innerHTML = average




	if (student.isAwesome()) {
		var awesome = document.getElementById('student-awesome');
		awesome.removeAttribute('class');

	}  else {
		var notAwesome = document.getElementbyId('student-practice');
		notAwesome.removeAttribute('class');
	}


   }, false);





