<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Reservation System</title>
</head>
<body>

<nav class="navbar">
        <div class="logo">
            <img src="BUS LOGO.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#about">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>


    <section class="search-section">
        <h2>Search for Buses</h2>
        <form id="searchForm" action="searchbuses.php" method="POST">
            <label for="origin">Origin:</label>
            <input list="originOptions" id="origin" name="origin" required>
            <datalist id="originOptions">
                <?php
                // Array of available origins, dynamically generating options
                $origins = ['nairobi', 'mombasa', 'kisumu', 'nakuru', 'eldoret', 'kilifi', 'watamu', 'malindi', 'lamu'];
                foreach ($origins as $origin) {
                    echo "<option value=\"$origin\">";
                }
                ?>
            </datalist>
            
            <label for="destination">Destination:</label>
            <input list="destinationOptions" id="destination" name="destination" required>
            <datalist id="destinationOptions">
                <?php
                // Array of available destinations, dynamically generating options
                $destinations = ['nairobi', 'mombasa', 'kisumu', 'nakuru', 'eldoret', 'kilifi', 'watamu', 'malindi', 'lamu'];
                foreach ($destinations as $destination) {
                    echo "<option value=\"$destination\">";
                }
                ?>
            </datalist>
            
            <label for="date">Travel Date:</label>
            <input type="date" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">

            <button type="submit">Book Now</button>
            <a href="<?php echo 'booking.php?id=123'; ?>">Go to Dynamic PHP Page</a>

            
        </form>
    </section>
    <section id="#about" class="about-section">
    <div class="container">
        <div class="about-content">
            <h2>About Our Bus Reservation System</h2>
            <p>
                Our Bus Reservation System offers a seamless and user-friendly platform for booking intercity and interstate bus tickets. 
                With a few clicks, you can explore available buses, check seat availability, and make reservations with ease.
            </p>
            <p>
                We aim to provide a smooth and hassle-free travel experience by connecting travelers with a variety of bus operators across the country. 
                Whether you are planning a weekend getaway or a business trip, our system ensures that you have access to the best travel options at competitive prices.
            
            </p>
            <h3>Key Features:</h3>
            <ul>
                <li>Real-time bus schedules and availability</li>
                <li>Instant seat selection and booking confirmation</li>
                <li>Secure online payments and ticket management</li>
                <li>Multiple routes and bus operators to choose from</li>
                <li>User-friendly interface for a quick and easy booking process</li>
            </ul>
            <h3>Our Mission:</h3>
            <p>
                We are dedicated to making bus travel easier, safer, and more accessible. Our goal is to provide a platform where passengers can effortlessly find 
                and book the most convenient buses, ensuring a smooth travel experience every time.
            </p>
        </div>
    </div>
</section>

    <footer>
        <p>&copy; 2024 Naekana Sacco Bus Reservation System</p>
    </footer>

    <script src="script.js"></script>  
</body>
</html>
