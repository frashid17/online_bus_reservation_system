<?php
require_once 'config.php';

if (isset($_GET['schedule_id'])) {
    $schedule_id = $_GET['schedule_id'];
    $schedule = getScheduleById($schedule_id);
}

if (isset($_POST['book'])) {
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $seat_number = $_POST['seat_number'];
    bookSeat($schedule_id, $customer_name, $customer_email, $seat_number);
    header('Location: index.php');
    exit;
}
?>

<html>
<head>
    <title>Book a Seat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Book a Seat</h1>
        <form action="" method="post">
            <label for="customer_name">Customer Name:</label>
            <input type ="text" id="customer_name" name="customer_name"><br><br>
            <label for="customer_email">Customer Email:</label>
            <input type="email" id="customer_email" name="customer_email"><br><br>
            <label for="seat_number">Seat Number:</label>
            <input type="number" id="seat_number" name="seat_number"><br><br>
            <input type="submit" name="book" value="Book">
        </form>
    </div>
</body>
</html>