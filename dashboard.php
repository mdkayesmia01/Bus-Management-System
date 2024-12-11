<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Management System - Insert Form</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="form-container">
        <button> <a href="index.html">Home</a></button>
        <h2>Insert Bus Details</h2>
        <form action="submit.php" method="POST">
            <label for="bus-name">Bus Name:</label>
            <input type="text" id="bus-name" name="bus_name" required placeholder="Enter bus name">

            <label for="start-place">Start Place:</label>
            <input type="text" id="start-place" name="start_place" required placeholder="Enter start place">

            <label for="end-place">End Place:</label>
            <input type="text" id="end-place" name="end_place" required placeholder="Enter end place">

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="rent">Rent:</label>
            <input type="number" id="rent" name="rent" required placeholder="Enter rent amount">

            <label for="supervisor-phone">Supervisor Phone Number:</label>
            <input type="tel" id="supervisor-phone" name="supervisor_phone" required placeholder="Enter phone number" pattern="[0-9]{10}">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
