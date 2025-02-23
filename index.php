<!doctype html>
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
    <?php if(isset($_GET['error'])): ?>
      <div class="w3-panel w3-red">
        <p><?php echo $_GET['error']; ?></p>
      </div>
    <?php endif; ?>
    <h1>Register Here</h1>
    <form method="post" action="register.php" class="w3-container">
      <label class="w3-label w3-text-blue" for="fname">First Name:</label>
      <input class="w3-input w3-border" type="text" name="fname" id="fname" >
      <br/>
      <label class="w3-label w3-text-blue" for="lname">Last Name:</label>
      <input class="w3-input w3-border" type="text" name="lname" id="lname" >
      <br/>
      <label class="w3-label w3-text-blue" for="email">Email:</label>
      <input class="w3-input w3-border" type="email" name="email" id="email" >
      <br/>
      <label class="w3-label w3-text-blue" for="location">Location:</label>
      <select class="w3-input w3-border" name="location" id="location" >
        <option value="" disabled selected>Choose your location</option>
        <option value="Canada ">Canada</option>
        <option value="Germany">Germany</option>
        <option value="United States">United States</option>
      </select>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </div>
  <script src="js/app.js"></script>

</body>
</html>
