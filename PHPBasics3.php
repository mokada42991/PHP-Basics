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

// The FOR EACH loop
$names2 = ['alex', 'billy', 'dale'];

foreach ($names2 as $index => $name) {
  echo $index . ':' . $name . '<br>';
}

$topics = [
  [
    'id' => 1,
    'title' => 'The best way to learn PHP?',
    'posts' => [
      ['body' => 'Practice a lot!'],
      ['body' => 'Work on a project.']
    ]
  ],
  [
    'id' => 2,
    'title' => 'How do I use a foreach loop?',
    'posts' => [
      ['body' => 'Just watch this part.']
    ]
  ]
];

foreach ($topics as $topic) {
  echo '<h1>' . $topic['title'] . '</h1>';
  foreach ($topic['posts'] as $post) {
    echo '<p>' . $post['body'] . '</p>';
  }
}

// Breaking & continuing
$names3 = ['alex', 'billy', 'dale'];

foreach ($names3 as $name) {
  echo $name . '<br>';
  break;
}

$users = [
  ['username' => 'alex'],
  ['username' => 'billy'],
  ['username' => 'dale'],
  ['username' => 'ashley'],
  ['username' => 'mabel'],
  ['username' => 'josh']
];

$toFind = 'dale';
$result = null;

foreach ($users as $user) {
  if ($user['username'] === $toFind) {
    $result = $user;
    break;
  }
}

var_dump($result);

$toSkip = 'billy';

foreach ($users as $user) {
  if ($user['username'] === $toSkip) {
    continue;
  }

  echo $user['username'] . '<br>';
}

$users2 = [
  [
    'username' => 'alex',
    'likes' => ['cats', 'food']
  ],
  [
    'username' => 'billy',
    'likes' => ['code', 'cats', 'food']
  ],
  [
    'username' => 'dale',
    'likes' => ['code', 'cats', 'music']
  ],
];

$toFind = 'code';
$found = null;

foreach ($users2 as $user) {
  foreach ($user['likes'] as $like) {
    if ($like === $toFind) {
      $found = $user;
      break 2;
    }
  }
}

var_dump($found);

// Dumping
$users3 = [
  ['name' => 'alex', 'age' => 27],
  ['name' => 'billy', 'age' => 23]
];

var_dump($users3);

echo '<pre>', print_r($users3), '</pre>';
