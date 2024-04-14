<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>About Us</h2>
            <p>This is the about us section.</p>
        </section>
        
        <section>
            <h2>Our Services</h2>
            <p>Explore our range of services.</p>
        </section>
        
        <section>
            <h2>Contact Us</h2>
            <p>Get in touch with us.</p>
        </section>
    </main>
    <form action="submit.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        <button>
        <input type="submit" value="Submit">
        
</body>
</html>



<?php

echo "Ayush Developer";





?>