<?php
include "connect.php";
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="index">

<div class="header">
  <a href="index.html"><img src="img/paperplane3.jpg" alt="plane logo"></a>
  Queensgate Airlines
</div>

<?php include "nav.php"; ?>

<h1>Homepage of Queensgate Airlines</h1>

<p>Welcome to the official homepage of Queensgate Airlines. Here you can find information and updates on all flights.
  <br><br>
  Click below to view all flights.
  <br><br><br>
  <a href="browseable-list.php">
    <button class="button" style="vertical-align:middle"><span>View Flights</span></button>
  </a>
</p>
<br>
<footer>
<div class="footer">
<div>
Contact Us:<br>
Customer service chat<br>
Email - info@Queensgateair.com<br>
Phone - 0113 754 8952
</div>

<div>
  Socials:<br>
  Facebook - Queensgate Airlines<br>
  Snapchat - Queensgate_Airlines<br>
  Twitter - @Queensgate Airlines
</div>

<div>
  Passenger Policies<br>
  Privacy Policies<br>
  Terms and Conditions<br>
  Copyrights
</div>
</div>
</footer>

</body>
</html>
