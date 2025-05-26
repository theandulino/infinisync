<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfiniSync - Digital Solutions</title>
    <link rel="stylesheet" href="/data/styles/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <div class="logo">

                <img src="/data/images/logo_long.png" alt="" style="height: 45px; cursor: pointer;" onclick="location.href='/'">
            </div>
            <nav>
                <a href="/hosting/web-hosting">Web Hosting</a>
                <a href="/hosting">Game Servers</a>
                <a href="/wip.php">Archive</a>
            </nav>
            <?php if (isset($_SESSION['username'])): ?>
                <a href="/account">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</a>
            <?php else: ?>
                <a href="/account">My InfiniSync</a>
            <?php endif; ?>
        </div>
    </header>