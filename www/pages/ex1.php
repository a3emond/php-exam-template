<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF Token once
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = md5(uniqid(rand(), TRUE));
}
$token = $_SESSION['token']; // Reuse existing token

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // CSRF Token Validation
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
        $errors[] = 'Form submission is invalid (CSRF failed)';
    }

    // Form Validation with isset()
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Form Validation
    if (empty($_POST['name'])) {
        $errors[] = 'Name is required';
    }

    if (empty($_POST['email'])) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($_POST['password'])) {
        $errors[] = 'Password is required';
    } elseif (strlen($_POST['password']) < 6) {
        $errors[] = 'Password must be at least 6 characters';
    }

    // Display Result
    if (empty($errors)) {
        echo '<p style="color:green;">Form submitted successfully!</p>';
    } else {
        foreach ($errors as $error) {
            echo '<p style="color:red;">' . htmlspecialchars($error) . '</p>';
        }
    }
}
?>

<h2>Exercise 1</h2>

<form action="/ex1" method="post">
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
    
    <input type="text" name="name" placeholder="Name" 
        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
    
    <input type="text" name="email" placeholder="Email" 
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    
    <input type="password" name="password" placeholder="Password">
    
    <input type="submit" value="Submit">
</form>
