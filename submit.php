<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_management"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bus_name = $_POST['bus_name'];
    $start_place = $_POST['start_place'];
    $end_place = $_POST['end_place'];
    $time = $_POST['time'];
    $rent = $_POST['rent'];
    $supervisor_phone = $_POST['supervisor_phone'];

    // SQL query to insert data into the buses table
    $sql = "INSERT INTO buses (bus_name, start_place, end_place, time, rent, supervisor_phone) 
            VALUES ('$bus_name', '$start_place', '$end_place', '$time', '$rent', '$supervisor_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New bus details inserted successfully!";
        header('Location: dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
