<?php

$adjectives = ['big', 'funny', 'tired', 'old', 'young', 'blue', 'green', 'yellow', 'purple', 'tall'];
$nouns = ['street', 'car', 'house', 'pool', 'tree', 'shoes', 'jeans', 'shirt', 'boots', 'mittens'];

// $adjectiveMessage = array_rand($adjectives, 1);
// $nounMessage = array_rand($nouns, 1);

function selectAdjective($adjectives) {
	$adjectiveMessage = $adjectives[array_rand($adjectives, 1)];
	return $adjectiveMessage;
}
$adjectiveChoice = selectAdjective($adjectives);

function selectNoun($nouns) {
	$nounMessage = $nouns[array_rand($nouns, 1)];
	return $nounMessage;
}
$nounChoice = selectNoun($nouns);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
    <h1><?= $adjectiveChoice . $nounChoice ?></h1>
</body>
</html>

