<?php
// Function Basics
function fullName() {
  return 'Alex Garrett'. '<br>';
}

$fullName = fullName();
echo $fullName;

function fullName2($firstName, $lastName, $seperator = ' ') {
  return "{$firstName}{$seperator}{$lastName}";
}

$fullName2 = fullName2('Alex', 'Garrett', '_');
echo $fullName2 . '<br>';

$fullName3 = function ($firstName, $lastName, $seperator = ' ') {
  return "{$firstName}{$seperator}{$lastName}";
};

echo $fullName3('Alex', 'Garrett') . '<br>';

// Function flexibility
function fullName4($firstName, $lastName = null, $seperator = '_') {
  if (trim($firstName === '')) {
    return;
  }
  if ($lastName === null) {
    return $firstName;
  }
  return "{$firstName}{$seperator}{$lastName}";
}

var_dump(fullName4('Alex'));

// func_get_args
function add($num1, $num2, $num3) {
return $num1 + $num2 + $num3;
}

echo add(5, 10, 10) . '<br>';

$numbers = [5, 10, 10];

function add2(array $numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo add2($numbers). '<br>';

function add3() {
    $total = 0;

    foreach (func_get_args() as $number) {
        if (!is_numeric($number)) {
            continue;
        }
        $total += $number;
    }

    return $total;
}

echo add3(5, 10, 10, '1alex') . '<br>';

function add4() {
    return array_sum(func_get_args());
}

echo add4(5, 10, 10). '<br>';

// Scope
$config = [
    'seperator' => '_'
];

$fullName5 = function ($firstName, $lastName) use ($config) {
    // global $config;
    return "{$firstName}{$config['seperator']}{$lastName}";
};

echo $fullName5('Alex', 'Garrett') . '<br>';

// Breaking up files
    // include 'hello.php';
    // require 'hello.php';
    // include_once 'hello.php';
    // require_once 'hello.php';

// GET superglobals
var_dump($_GET);

    // echo $_GET['slug'];
    // URL: http://localhost:8080/PHPBasics4.php?search=learn%20php&page=1
$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on page' . $page . '</p>';

for ($i = 1; $i <= $pages; $i++) {
    echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a> ';
}

if (isset($_GET['search'])) {
    $searchTerm2 = $_GET['search'];
    echo '<h3>Searching for: ' . $searchTerm2 . '</h3>';
}
