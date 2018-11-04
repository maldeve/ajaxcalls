<?php
// connect to database
$host = 'localhost';
$dbname = 'ajaxcalls';
$username = 'root';
$password = '';

// create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
} else {
    echo "Connection successful...";
}

// show progess
echo 'Processing...';

// check for POST variable
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    // echo 'POST: Your name is '. $_POST['name'];
    // insert query
    $query = "INSERT INTO users(name) VALUES('$name')";

    // check query
    if (mysqli_query($conn, $query)) {
        echo "User added successfully...";
    }
}

// check for GET variable
if (isset($_GET['name'])) {
    echo 'GET: Your name is '. $_GET['name'];
}
?>