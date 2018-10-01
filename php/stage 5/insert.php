
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO details (name, phone, email)
VALUES ('fsa', '12', 'hafsa@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('JAGADEESH', '11', 'jAG@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('SIVA', '13', 'SIVA@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('SAI', '14', 'SAI@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('RAM', '15', 'RAM@example.com')";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>