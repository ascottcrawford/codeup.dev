<?php

function pageController()
{

	$data['adjectives'] = ['big', 'funny', 'tired', 'old', 'young', 'blue', 'green', 'yellow', 'purple', 'tall'];
	


	$data['nouns'] = ['street', 'car', 'house', 'pool', 'tree', 'shoes', 'jeans', 'shirt', 'boots', 'mittens'];

	$data['adjective'] = array_rand ( $data['adjectives']);
	$data['noun'] = array_rand ( $data['noun'])

		// $adjectiveMessage = array_rand($adjectives, 1);
		// $nounMessage = array_rand($nouns, 1);

		// function selectAdjective($adjectives) {
		// 	$adjectiveMessage = $adjectives[array_rand($adjectives, 1)];
		// 	return $adjectiveMessage;
		// }
		// $adjectiveMessage = selectAdjective($adjectives);
		// var_dump($adjectiveMessage);

		// function selectNoun($nouns) {
		// 	$nounMessage = $nouns[array_rand($nouns, 1)];
		// 	return $nounMessage;
		// }
		// $nounMessage = selectNoun($nouns);
		// var_dump($nounMessage);

	return $data;

}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
    <h1><?= $adjectives[$adjective] . $nouns[$noun] ?></h1>
</body>
</html>

