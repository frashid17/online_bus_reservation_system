<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Search</title>
    <style>
        /* Reset some basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .navbar {
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 100%;
    background-color:orange;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    z-index: 1000;
}

.navbar .logo img {
    height: 50px;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin-left: 10px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    
}

.nav-links a:hover {
    background-color: #555;
    border-radius: 5px;
}
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
            width: 80%;
            margin-top:30px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            font-size: 16px;
            color: #666;
        }

        .search-result {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
            align-items:center;
            justify-content:space-between;
            
        }
    </style>
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#about">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Bus Search</h1>
        <?php
        // searchbuses.php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $origin = $_POST['origin'];
            $destination = $_POST['destination'];
            $date = $_POST['date'];

            // Perform search logic or database query here
            // Example:
            // $result = searchBuses($origin, $destination, $date);

            echo "<p class='search-result'>Searching buses from <h4>$origin</h4> to <h4>$destination</h4> on <strong>$date</strong></p>";
        }
        ?>
    </div>
</body>
</html>
