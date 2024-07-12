<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        nav a.nav-link {
            color: #fff !important;
        }
    </style>

    <title>Doorstep</title>
</head>

<body>
<nav class="nav bg-dark">
    <?php if (!isset($_SESSION['providers'])): ?>
        <a class="nav-link active" href="home.php">HOME</a>
    <a class="nav-link active" href="index.php">Find Service Provider</a>
    <a class="nav-link active" href="provider.php">Update Information</a>
    <div class="ml-auto">
        <a class="nav-link active" href="logout.php">Log Out</a>
    </div>
</nav>


    <?php else: ?>
    <a class="nav-link active" href="logout.php">Log Out</a>
    
  <?php endif; ?>
</nav>