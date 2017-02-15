<?php
// Basic Arithmetic
$views = 0;

$views = $views + 1;

$views++;
$views--;

echo $views . '<br>';

$totalLessons = 30;
$completedLessons = 7;

$percentageComplete = number_format(($completedLessons / $totalLessons) * 100);

echo "You've completed {$percentageComplete}% of this course!" . '<br>';

$balance = 500;
$cost = 25;

echo $balance = $balance - $cost . '<br>';

$points = 0;
$points += 10;
$points -= 2;

echo $points . '<br>';

$a = 10;
$b = 8;

echo $a % $b . '<br>';

$rows = 10;

for ($row = 1; $row <= $rows; $row++) {
  if ($row % 2 === 0) {
    echo 'Even';
  } else {
    echo 'Odd';
  }
}

echo '<br>';

$c = 10;

echo $c ** 9 . '<br>';

// The FOR loop
for ($x = 1; $x <= 10; $x++) {
  echo $x . '<br>';
}

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);
echo $pageCount . '<br>';

if ($pageCount > 1) {
  for ($i = 1; $i <= $pageCount; $i++) {
    echo '<a href="?page=' . $i . '">' . $i . '</a> ';
  }
}

echo '<br>';

$names = ['alex', 'billy', 'dale', 'josh'];

for ($i = 0; $i < count($names); $i++) {
  echo $names[$i] . '<br>';
}

// WHILE and DO WHILE loops
while (false) {
  echo 'Will this run?';
}

$currentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while ($currentNumber <= $endAt) {
  echo $currentNumber . '<br>';
  $currentNumber += $incrementBy;
}

$numberIWant = 3;

while (($diceRoll = rand(1, 6)) !== $numberIWant) {
  echo "You rolled a {$diceRoll}, we need a {$numberIWant}." . '<br>';
}

echo "You rolled a {$numberIWant}!" . '<br>';

do {
  echo 'This will be run at least once.' . '<br>';
} while (false);
