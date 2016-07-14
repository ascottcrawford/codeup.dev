<?php

//remove vowels from an array
//need a loop to check the contents
//it is an array - use a foreach
//how do we know if it is a vowel? Does PHP have a function
     //didn't find a specific function on php for vowels but stack overflow gave the idea that i could do a match case (preg-match) and put in all the vowels to compare.
	//doesn't look like it is exactly what i need but maybe array intersect?
//maybe an if elseif 
//once it determines a vowel we will need to unset



$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
// $vowels = ['a', 'e', 'i', 'o', 'u'];

// $consonants = str_replace($vowels, "", implode("", $letters));

// var_dump($consonants);

// var_dump(str_split($consonants));



function removeVowels(&$vowels)
{
	foreach($vowels as $index => $vowel) {
		if ($vowel == 'a' || $vowel == 'e' || $vowel == 'i' || $vowel == 'o' || $vowel == 'u') {
			unset($vowels[$index]);
		}
	}
	return $vowels;
}
removeVowels($letters);
print_r($letters);





// $vowelsInLetters = [];

// $vowelsInLetters = array_intersect($letters, $vowels);
// var_dump($vowelsInLetters);

// foreach ($letters as $vowel) {
// 	if ($)
// }

// foreach ($letters as $letter) {
// 	$vowelsInLetters = array_intersect($letters, $vowels);
// 	}
// }


