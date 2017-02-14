<?php

echo 'Hello!';

$name = 'Masami';

echo $name;

$daysInWeek = 7;

$daysInWeek = 8;

echo $daysInWeek;

echo $text = 'There are ' . $daysInWeek . ' days in the week.';

echo '<br>';

// Data types: Boolean, Strings, Integers, Floats, Arrays, Objects, NULL, Resources, Callbacks.
// Strings
// Escape a quotation mark using a backslash.
$message = 'It\'s a lovely day today';

$message2 = $name . ' said "Learning PHP is fun".';

echo $message2;
echo '<a href="www.google.com">Link</a>';

echo '<br>';

// Integers & Floats
$pi = 3.141;

$bankBalance = 1.2e6; // 1.2 million

echo 'Your bank balance is $' . $bankBalance;

echo '<br>';

// Booleans
// 1 = true, 0 = false.
$fileIsUploaded = true;

if ($fileIsUploaded) {
  echo 'Your file was uploaded.';
}

$isInt = is_int(1);

if ($isInt) {
  echo 'That is an integer.';
}

var_dump(is_int('Masami'));

echo '<br>';

// Arrays
$names = ['alex', 'billy', 'dale'];

var_dump($names);

echo $names[0];

$names[] = 'josh';

var_dump($names);

echo $names[3];
