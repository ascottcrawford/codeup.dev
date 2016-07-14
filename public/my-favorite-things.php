<?php

// // for when you know in davance the exact number of iterations
//    1*2=2
//    ...
//    1*10=10

// // foreach  -> when you have an array associative or indexed

//  $elements = [1, 11 => 2,  3, 'name' => 6, 9];

//  for ($i = 0: $i < count($elements); $i++) {
//  	echo $elements[$i];
//  }

// foreach ($$elements as $element) {
// 	echo $element
// }

// foreach ($$elements as $key => $value) {
// 	if ($key == 'name') {
// 		unset($element[$key]);
// 	}
// }


// // When you don't know how many iterations a loop is gonna have

// // while    // If the loop could have 0 iterations

// while ($cones > 0) {
// 	//
// }

// // do while // If you need it at least once
// do {
// 	// show menu
// } while ($option != 5);



// loop

// Show the user a menu with 5 options

// For option 1
  // Open the file
  // Convert its contents to an array
  // Show all the contacts
// For option 2
   // Add a new contact
//..


// will finish when the user inputs 5



function pageController() 
{
	$data = [];
	$data['favoriteThing'] = ['Movies', 'Legos', 'MegaBlocks', 'SuperMan', 'Batman'];
	
	return $data;
}
extract(pageController());
?>

<!DOCTYPE html>	
<html>
<head>
	<title>Favorite Things</title>
	<style> 
	tr:nth-child(even) {background: #CCC};
	tr:nth-child(odd) {background: #FFF};
	</style>

</head>
<body>
	<h1>My Favorite Things</h1>
    <table>
    <?php foreach ($favoriteThings as $favoriteThing): ?>
        <tr><td><?= $favoriteThing; ?></tr></td>
    <?php endforeach; ?>
    </table>

</body>
</html>