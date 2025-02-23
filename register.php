<?php
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $location = $_POST['location'];

  if($first_name === "" || $last_name === '' || $email === '' || $location === ''){
    header("Location: index.php?error=Please%20Fill%20In%20All%20Fields");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="A simple registration form, to work with PHP $POST und $GET">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
<div class="w3-card w3-margin w3-padding">
  <h1>User Profile</h1>
  <h3><?php echo $first_name . ' ' . $last_name ?></h3>
  <ul>
    <li><?php echo $email ?></li>
    <li><?php echo $location ?></li>
  </ul>
</div>
<script src="js/app.js"></script>

</body>
</html>
