<?php
​
function pageController (){

	$data['adjectives'] = ['big', 'funny', 'tired', 'old', 'young', 'blue', 'green', 'yellow', 'purple', 'tall'];

	$data['nouns'] = ['street', 'car', 'house', 'pool', 'tree', 'shoes', 'jeans', 'shirt', 'boots', 'mittens'];

	$data['adjective'] = array_rand ( $data['adjectives']);

	$data['noun'] = array_rand ( $data['nouns']);

	return $data;

}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
		<title></title>
</head>
<body>
	<h1><?php echo $adjectives[$adjective] . " " . $nouns[$noun]?></h1>
</body>
</html>

