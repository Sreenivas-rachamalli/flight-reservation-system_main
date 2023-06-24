<?php
  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Admin and User credentials (for demonstration purposes)
    $adminUsername = 'admin';
    $adminPassword = 'admin123';
    $userUsername = 'user';
    $userPassword = 'user123';

    // Check if the submitted username and password match the admin credentials
    if ($username === $adminUsername && $password === $adminPassword) {
      // Successful admin login, redirect to the admin dashboard or desired page
      header('Location: admin_dashboard.php');
      exit();
    }
    // Check if the submitted username and password match the user credentials
    elseif ($username === $userUsername && $password === $userPassword) {
      // Successful user login, redirect to the user dashboard or desired page
      header('Location: user_dashboard.php');
      exit();
    } else {
      // Invalid credentials, display an error message
      echo 'Invalid username or password. Please try again.';
    }
  }
?>
