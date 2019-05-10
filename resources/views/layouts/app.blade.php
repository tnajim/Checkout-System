<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    table, th, td {
        border: 1px solid black;
    }
    </style>
    <meta charset="UTF-8">
    <title>Checkout System</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<center>
    @yield('content')

<br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravelcheckout";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, apples, oranges, price, discounted FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Apples</th><th>Oranges</th><th>Total Price</th><th>Discounted</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["apples"]."</td><td>".$row["oranges"]."</td><td>".$row["price"]."</td><td>".$row["discounted"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</center>
</body>
</html>