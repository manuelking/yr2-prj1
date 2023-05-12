<?php
include "connect.php";
include "session.php";

$query = "SELECT * FROM flights";
$resultset = $conn->query($query);
$flights = $resultset->fetchAll();
$conn=NULL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Flights</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="index">

<div class="header">
  <a href="index.html"><img src="img/paperplane3.jpg" alt="plane logo"></a>
  Queensgate Airlines
</div>

<?php include "nav.php"; ?>

<h1>Flights</h1>
<p>
	These are the full list of flights . To find out more information, click on a flight date.
</p>

<?php include "views/list-view.php"; ?>

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
