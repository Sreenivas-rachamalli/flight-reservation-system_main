<?php
  // Establish a connection to the database
  // Replace DB_HOST, DB_USERNAME, DB_PASSWORD, and DB_NAME with your database details
  $conn = mysqli_connect('DB_HOST', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME');

  // Check if the connection was successful
  if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
  }

  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute a database query to insert the new user
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
      // Registration successful, redirect to the login page or desired page
      header('Location: login.php');
      exit();
    } else {
      // Registration failed, display an error message
     
