<?php
// Ternary operator
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
echo $page . '<br>';

$page2 = isset($_GET['page']) ? $_GET['page'] : 1;
echo $page2 . '<br>';

$balance = 0;
$availableBalance = $balance ?: 'zero';
echo 'Your available balance is ' . $availableBalance . '<br>';

// Commenting
/*
    Block Comment.
    More text.
    Even more text.
*/
function removedWhiteSpace() {

}

// Finding PHP functions
    // php.net
echo strlen('alex');
var_dump (strlen('alex'));

$name = 'Alex';
echo strtoUpper($name) . '<br>';
echo strtoLower($name) . '<br>';

$name2 = '.................Alex          ';
echo trim($name2, '.') . '<br>';

$name3 = '                     Alex';
echo ltrim($name3) . '<br>';

$name4 = 'alexander';
echo substr($name4, 0, ceil((strlen($name4) / 2))) . '<br>';

$page2 = $_GET['page'] ?: 1;
if (empty(trim($page))) {
    $page = 1;
}
echo $page2 . '<br>';

$number = 1000000000;
echo number_format($number, 0, '.', '_') . '<br>';
    // Redirect.
    // header('Location: PHPBasics1.php');
