<?php
include "connect.php";
include "session.php";

//This is a simple example we would normally do some form validation here

//basic form processing
$origin=$_POST['origin'];
$destination=$_POST['destination'];
$ddate=$_POST['ddate'];
$dtime=$_POST['dtime'];
$adate=$_POST['adate'];
$atime=$_POST['atime'];

//SQL INSERT for adding a new row
//Use a prepared statement to bind the values from the form
$query="INSERT INTO flights (id, origin_id, destination_id, departure_date, departure_time, arrival_date, arrival_time) VALUES (NULL, :origin_id, :destination_id, :departure_date, :departure_time, :arrival_date, :arrival_time)";
$stmt=$conn->prepare($query);
$stmt->bindValue(':origin_id', $origin);
$stmt->bindValue(':destination_id', $destination);
$stmt->bindValue(':departure_date', $ddate);
$stmt->bindValue(':departure_time', $dtime);
$stmt->bindValue(':arrival_date', $adate);
$stmt->bindValue(':arrival_time', $atime);
$stmt->execute();
$conn=NULL;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Saved</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="index">

<div class="header">
  <a href="index.html"><img src="img/paperplane3.jpg" alt="plane logo"></a>
  Queensgate Airlines
</div>

<?php include "nav.php" ?>;

<?php
echo "<p>You have succesfully added the details for the flight to {$destination} borading on {$ddate} at {$dtime}.</p>"
?>

<a href="index.php"></a>
  <button class="button" style="vertical-align:middle"><span>Return to homepage</span></button>
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
  Passenger Policies
  Privacy Policies<br>
  Terms and Conditions<br>
  Copyrights
</div>
</div>
</footer>

</body>
</html>
