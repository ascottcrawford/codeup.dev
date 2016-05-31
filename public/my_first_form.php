<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<html>
<head>
	<title>My First HTML Form</title>
<form method="POST" action="/my_first_form.php">
	<div>
	<h1>User Login</h1>
		<label for="username">Username</label>
		<input id="username" name="username" type="text" placeholder="Enter Username">
	</div>
	<div>
		<label for="password">Password</label>
		<input id="password" name="password" type="password" placeholder="Enter Password">
	</div>
	 <div>
		<button type="submit">Login</button>
	</div>
	<h1>Compose An Email</h1>
	  <div>
		<label for="emailto">Email To:</label>
		<input id="emailto" name="emailto" type="text" placeholder="Enter Email To:" autofocus>
	</div>
	<div>
		<label for="emailfrom">Email From:</label>
		<input id="emailfrom" name="emailfrom" type="test" placeholder="Enter Email From:">
	</div>
	 <div>
		<label for="subject">Subject:</label>
		<input id="subject" name="subject" type="test" placeholder="Subject">
	</div>
	<div>
		<textarea id="emailbody" name="emailbody" rows="5" cols="40">Content here</textarea>
	</div>
	<div>
		<label for"copy">Do you want a copy sent to your email?</label>
		<input type="checkbox" name="copy" checked>
	</div>
	<div>
		<button id="submit">Submit</button>
	<div>
	<h1>Multiple Choice Test</h1>
	<p>What is your favorite color?</p>
	   	<label>	<input type="radio" name="q1" value="Yello">Yellow</label>
	   	<label>	<input type="radio" name="q1" value="blue">Blue</label>
	   	<label>	<input type="radio" name="q1" value="green">Green</label>
   	</div>
   	<div>
		<button id="submit">Submit</button>
	<div>
   	<h1>Checkbox Group</h1>
	<p>What are your favorite foods?</p>
	   	<label>	<input type="checkbox" name="food[]" value="Pizza">Pizza</label>
	   	<label>	<input type="checkbox" name="food[]"  value="Queso">Queso</label>
	   	<label>	<input type="checkbox" name="food[]"  value="Burger">Burger</label>
	   	<label>	<input type="checkbox" name="food[]"  value="Fries">Fries</label>
   	</div>
   	<div>
		<button id="submit">Submit</button>
	</div>
	<h1>Multiple Choice Selector</h1>
	<div>
		<label for="sports">Which sports do you play?</label>
		<select id="sports" name="sports[]" multiple>
			<option value="football">Football</option>
			<option value="baseball">Baseball</option>
			<option value="soccer">Soccer</option>
			<option value="tennis">Tennis</option>
		</select>
	</div>
	<div>
	<button id="submit">Submit</button>
	</div>
	<div>
		<h1>Select Testing</h1>
			<label for="car">Do you own a Car?</label>
			<select id="car" name="car">
		    <option value="1">yes</option>
		    <option value="0" selected>no</option>
			</select>
	</div>
	 	<div>
		<button id="submit">Submit</button>
	<div>
</form>

</html>