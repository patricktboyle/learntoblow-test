<?php
session_start();

// If user already entered correct code, go to video page
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: video-player.php");
    exit;
}

// Check submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredCode = $_POST['access_code'] ?? '';
    $correctCode = 'eU.D-6-ivViseKk*s'; // 🔒 Set your desired code here

    if ($enteredCode === $correctCode) {
        $_SESSION['authenticated'] = true;
        header("Location: video-player.php");
        exit;
    } else {
        $error = "Incorrect access code.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle.css">
    <title>Access Code Required</title>
</head>
<nav class="navbar"> 
    <div class="nav-logo">
        <a href="index.html" class="logo">Learn <br> Glassblowing</a>
    </div>
    <div class="nav-links">
        <a href="index.html">Home</a>
        <a href="problems.html">Instruction</a>
        <a href="shop.html">Shop</a>
        <a href="video.html">Video</a>
    </div>
</nav>
<body>
    <h2>Enter Access Code</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="password" name="access_code" placeholder="Access Code" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
