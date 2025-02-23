<?php
$pageTitles = [
    '/' => 'Home',
    '/ex1' => 'Exercise 1',
    '/ex2' => 'Exercise 2',
    '/ex3' => 'Exercise 3',
    '/ex4' => 'Exercise 4',
    '/ex5' => 'Exercise 5',
    '/ex6' => 'Exercise 6',
    '/ex7' => 'Exercise 7',
    '/ex8' => 'Exercise 8',
    '/ex9' => 'Exercise 9',
];

// Get current path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Get title based on route, or fallback to "PHP Mid-Term Exam"
$pageTitle = $pageTitles[$path] ?? 'PHP Mid-Term Exam';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="PHP Mid-Term Exam">
    <meta name="keywords" content="PHP, Mid-Term, Exam">
    <meta name="author" content="Alexandre Emond">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <link rel="stylesheet" href="static/css/app.css">
</head>
