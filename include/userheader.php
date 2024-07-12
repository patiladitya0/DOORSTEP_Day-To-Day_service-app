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
    <?php if (!isset($_SESSION['user'])): ?>
    <a class="nav-link active" href="home.php">HOME</a>
    <a class="nav-link active" href="index.php">Find Service Provider</a>
    <a class="nav-link" href="register.php">Register Service Provider</a>
    <a class="nav-link" href="userbooking.php">Booking</a>
    <a class="nav-link ml-auto" href="about.php">About</a>
    
</nav>

    <?php elseif ($_SESSION['user']->name == 'admin'): ?>
    <a class="nav-link" href="managehall.php">Manage Providers</a>
    <a class="nav-link" href="admin.php">Manage Booking</a>
    <a class="nav-link" href="deletereview.php">Manage Review</a>
    <a class="nav-link" href="updateuserinfo.php">Update Information</a>
    <a class="nav-link" href="userlogout.php">Log Out</a>
    

    <?php else: ?>
    <a class="nav-link active" href="userhome.php">HOME</a>
    <a class="nav-link active" href="userindex.php">Find Service Provider</a>
    <a class="nav-link" href="register.php">Register Service Provider</a>
    <a class="nav-link" href="userbooking.php">Booking</a>
    <a class="nav-link" href="updateuserinfo.php">Update Information</a>
    <a class="nav-link active" href="review.php">Review</a>
    <a class="nav-link ml-auto" href="userabout.php">About</a>
    <a class="nav-link" href="userlogout.php">Log Out</a>
  
    
  <?php endif; ?>
</nav>