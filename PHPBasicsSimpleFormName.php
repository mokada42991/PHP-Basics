<?php
$name = $_POST['name'] ?: null;

if (empty(trim($name))) {
    header('Location: http://localhost:8080/PHPBasicsSimpleForm.php');
}

echo "Hi there, {$_POST['name']}!";
