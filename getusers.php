<?php
// connect to database
$host = 'localhost';
$dbname = 'ajaxcalls';
$username = 'root';
$password = '';

// create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// get query
$query = 'SELECT * FROM users';

// run query
$result = mysqli_query($conn, $query);

// fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// show it in JSON format
echo json_encode($users);