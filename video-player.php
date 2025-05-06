<?php
session_start();

// Deny access if code wasn't entered
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: video.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle.css">   
    <title>Protected Video</title>
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
    <!-- Embed your video here (HLS, YouTube, Vimeo, etc.) -->
    <video controls width="640" style="display: block;margin: 0 auto;height: auto;width:55%;">
        <source src="Videos/The Art of Fire Complete DVD.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>
