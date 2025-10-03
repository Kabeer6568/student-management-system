<?php

    require_once "../classes/student.php";

    $student = new Student;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="<?php echo "{$student->route}assets/css/style.css" ?>">
</head>
<body class="profile-body">
    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="social-icons">
                <a href="#" aria-label="Facebook">📘</a>
                <a href="#" aria-label="Twitter">🐦</a>
                <a href="#" aria-label="Instagram">📷</a>
            </div>
            
            <a href="index.html" class="logo">BRAND</a>
            
            <div class="header-actions">
                <button class="contact-btn">Contact Us</button>
                <button class="logout-btn" onclick="handleLogout()">Logout</button>
            </div>
            
            <button class="menu-toggle" onclick="toggleMenu()" aria-label="Toggle menu">☰</button>
        </div>
        
        <nav>
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="profile.html" class="active">Profile</a></li>
            </ul>
        </nav>
    </header>

