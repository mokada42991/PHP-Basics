<?php
// IF statement basics.
$dayOfWeek = 1;

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
} elseif ($dayOfWeek == 2) {
  echo 'It is Tuesday.';
} elseif ($dayOfWeek == 3) {
  echo 'It is Wednesday.';
} else {
  echo 'That is not a valid day.';
}

$dayOfWeek2 = 4;

$daysOfWeek = [
  1 => 'Monday',
  2 => 'Tuesday',
  3 => 'Wednesday'
];

var_dump(array_keys($daysOfWeek));

if (in_array($dayOfWeek2, array_keys($daysOfWeek))) {
  echo $daysOfWeek[$dayOfWeek2];
} else {
  echo 'That is not a valid day.';
}

echo '<br>';

$name = 'Alexander James Garrett';
  // Try to avoid nested if statements.
if ($name) {
  echo 'Your name is ' . $name;

  if (strlen($name) > 10) {
    echo '. Oh, and you have a very long name.';
  }
}

echo '<br>';
  // Cleaner version of above.
if (!$name) {
  return;
}

echo 'Your name is ' . $name . '.';

if (strlen($name) > 10) {
  echo ' Oh, and you have a very long name.';
}

echo '<br>';
  // Negative numbers also evaluate to true.
if (-5) {
  echo 'This will always be run.' . '<br>';
}

// Logical Operators
if (true && true && true) {
  echo 'Hello' . '<br>';
}

$username = 'alex';
$password = 'ilovecats';

if ($username == 'alex' && $password == 'ilovecats') {
  echo 'You are in!'. '<br>';
}

$dayOfWeek3 = 6;

if ($dayOfWeek3 == 6 || $dayOfWeek3 == 7) {
  echo 'The weekend is here!' . '<br>';
}

$workingTheWeekend = false;

if (($dayOfWeek3 == 6 || $dayOfWeek3 == 7) && !$workingTheWeekend) {
  echo 'You have a day off!' . '<br>';
}

// Comparison Operators
$uploaded = true;
  // Strict type checking. (===)
if ($uploaded === true) {
  echo 'Uploaded' . '<br>';
}
  // Type casting.
echo (int) '1alex' . '<br>'; // Returns 1.
var_dump((int) '1alex');

$tablesAvailable = false;

if ($tablesAvailable === true) {
  echo 'Book a table.' . '<br>';
}

if ($tablesAvailable !== true) {
  echo 'No tables available.' . '<br>';
}
if ($tablesAvailable <> true) {
  echo 'No tables available.' . '<br>';
}

$roomsRequested = 3;
$roomsAvailable = 3;

if ($roomsAvailable < $roomsRequested) {
  echo 'Sorry, not enough rooms.' . '<br>';
}

if ($roomsRequested >= $roomsAvailable) {
  echo 'Not enough rooms.' . '<br>';
}

$maxRoomsAllowed = 5;
$roomsRequested2 = 7;
$roomsAvailable2 = 20;

if (($roomsRequested2 >= $roomsAvailable2) || ($roomsRequested2 >= $maxRoomsAllowed)) {
  echo 'Please choose less rooms.' . '<br>';
} else {
  echo 'Your booking is complete.' . '<br>';
}

// Switch
switch (3) {
  case 1:
    echo 'The value is one.' . '<br>';
    break;
  case 2:
    echo 'The value is two.' . '<br>';
    break;
  default:
    echo 'The value is unknown.' . '<br>';
    break;
}

$weather = 'cloudy';
$color = null;

switch (true) {
  case $weather == 'sunny':
    $color = 'blue';
    break;
  case $weather == 'cloudy':
    $color = 'grey';
    break;
}

echo $color;
