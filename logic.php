<?php

# passing form data to use for logic
$numWords = $_POST['num']; 
#$boolNum = $_POST['numYes'];
#$boolSym = $_POST['symYes'];

# Hardcoded array list for password 
$wordList = array(
	'kelly', 
	'pajamas', 
	'shrimp', 
	'million', 
	'charizard', 
	'master', 
	'ignis', 
	'awakening', 
	'stratosphere', 
	'odin', 
	'eye', 
	'professor', 
	'indicted', 
	'vex', 
	'weak');
$symList = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");

$result = array();
#$finalArray = array();
$rand_keys = array_rand($wordList, $numWords);

foreach ($rand_keys as $key){
	$result[] = $wordList[$key];
}

shuffle($result);
shuffle($symList);



