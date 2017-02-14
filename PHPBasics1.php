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

echo '<br>';

// Arrays cont.
$people = [
  'alex' => 26,
  'billy' => 21
];

echo $people['alex'];

$users = [
  [
    'username' => 'alex',
    'email' => 'alex@codecourse.com',
    'likes' => ['cats', 'food']
  ],
  [
    'username' => 'billy',
    'email' => 'billy@codecourse.com',
    'likes' => ['books', 'cats']
  ]
];
var_dump($users);

echo $users[1]['email'] . '<br>';

echo $users[0]['likes'][0] . '<br>';

foreach ($users as $user) {
  echo $user['username'] . '<br>';
}

$users[] = [
  'username' => 'josh',
  'email' => 'josh@codecourse.com',
  'likes' => ['reading', 'cooking']
];

$users[1]['likes'][1] = 'dogs';

$users[1]['about'] = 'I am learning to code.';

var_dump($users);

//NULL

$name1 = 'alex';

$name1 = null;

var_dump($name1);

$name2 = 'billy';

unset($name2); // Set the value to NULL.

// Concatenation
$weather = 'sunny';

$degrees = 30.5;

$status = 'The current weather is ' . $weather . ' and it\'s ' . $degrees . ' degrees';

echo $status;

var_dump($status);
  // Variable parsing.
$status2 = "The current weather is $weather and it's $degrees degrees";

echo $status2 . '<br>';

$status3 = "The current weather is {$weather} and it's {$degrees}° degrees";

echo $status3 . '<br>';

echo 'My name is ', $name . '<br>';
$text2 = 'My name is ' . $name;
echo $text2;
