<?php
include "connect.php";
include "session.php";

if(!isset($_GET['id']))
{
	include "views/404-view.php";
	die();
}



//the id from the query string e.g. details.php?id=4
$flightId=$_GET['id'];
//prepared statement uses the id to select a single film
$stmt = $conn->prepare("SELECT * FROM flights
INNER JOIN airports ON flights.destination_id = airports.id
WHERE flights.id = :id");
$stmt->bindValue(':id',$flightId);
$stmt->execute();
$flight=$stmt->fetch();
$conn=NULL;

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Details</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="index">

<div class="header">
  <a href="index.html"><img src="img/paperplane3.jpg" alt="plane logo"></a>
  Queensgate Airlines
</div>

<?php include "nav.php"; ?>

<?php
//simple validation to see if we found a film
if($flight){
	echo "<h1>Flight to: {$flight['location']}</h1>";
	echo "<p>Landing at: {$flight['name']} airport</p>";
	echo "<p>Departure: {$flight['departure_date']} at {$flight['departure_time']}</p>";
	echo "<p>Arrival: {$flight['arrival_date']} at {$flight['arrival_time']}</p>";
}
else
{
	echo "<p>Can't find the flight</p>";
}
?>
<a href="browseable-list.php">
	<button class="button" style="vertical-align:middle"><span>Return to list</span></button>
</a>
<br><br>
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
