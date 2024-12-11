<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Bus Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="service_page_styles.css">
</head>
<body>
    <header>
        <h1>Our Services</h1>
    </header>
    <nav>
        <a href="index.html">Home</a>
        <a href="service.html">Services</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
    </nav>
    <main>
        <section class="services">
           

            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bus_management"; 
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Fetch data from the 'buses' table
            $sql = "SELECT * FROM buses";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                echo "<table border='1' cellpadding='10' cellspacing='0'>
                        <tr>
                            <th>ID</th>
                            <th>Bus Name</th>
                            <th>Start Place</th>
                            <th>End Place</th>
                            <th>Time</th>
                            <th>Rent</th>
                            <th>Supervisor Phone</th>
                            <th>Activity</th>
                        </tr>";
                
                // Output each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['bus_name'] . "</td>
                            <td>" . $row['start_place'] . "</td>
                            <td>" . $row['end_place'] . "</td>
                            <td>" . $row['time'] . "</td>
                            <td>" . $row['rent'] . "</td>
                            <td>" . $row['supervisor_phone'] . "</td>
                            <td>Call for Booking</td>
                          </tr>";
                }
                
                echo "</table>";
            } else {
                echo "No records found.";
            }
            
            // Close the connection
            $conn->close();
            ?>
            

        </section>
    </main>
    <footer>
        <p>&copy; 2024 Bus Management System. All rights reserved.</p>
    </footer>
</body>
</html>
