<?php
session_start();
// generate token
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = md5(uniqid(rand(), TRUE));
}

// Define available routes
$routes = [
    '/' => 'pages/home.php',
    '/home' => 'pages/home.php',
    '/ex1' => 'pages/ex1.php',
    '/ex2' => 'pages/ex2.php',
    '/ex3' => 'pages/ex3.php',
    '/ex4' => 'pages/ex4.php',
    '/ex5' => 'pages/ex5.php',
    '/ex6' => 'pages/ex6.php',
    '/ex7' => 'pages/ex7.php',
    '/ex8' => 'pages/ex8.php',
    '/ex9' => 'pages/ex9.php',
];

// Get requested route
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$page = $routes[$path] ?? 'pages/404.php'; // Fallback to 404 page

include 'components/head.php';
?>

<body>
    <?php include 'components/header.php'; ?>
    <?php include 'components/navbar.php'; ?>

    <div id="main-content">
        <?php include $page; ?>
    </div>

    <?php include 'components/footer.php'; ?>
    <script src="static/js/app.js"></script>
</body>
</html>
