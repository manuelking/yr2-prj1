<?php
include "connect.php";
include "session.php";

$query = "SELECT * FROM airports";
$resultset = $conn->query($query);
$airports = $resultset->fetchAll();
$conn=NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add new flight</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Flight form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="index">

<div class="header">
  <a href="index.html"><img src="img/paperplane3.jpg" alt="plane logo"></a>
  Queensgate Airlines
</div>

<?php include "nav.php" ?>
<?php
include "role.php";
?>
<h1>Admin functions - Add a new flight</h1>

<form action="save.php" method="post">
  <div>
  <label for="origin">Origin:</label>
  <!-- Output a dropdown menu so the user can select a single country -->
  <select id="origin" name="origin">
  <?php
  foreach($airports as $airport){
  	echo "<option value='{$airport["id"]}'>{$airport["location"]} - {$airport["name"]}</option>";
  }
  ?>
  </select>
  </div>
<div>
<label for="destination">Destination:</label>
<!-- Output a dropdown menu so the user can select a single country -->
<select id="destination" name="destination">
<?php
foreach($airports as $airport){
	echo "<option value='{$airport["id"]}'>{$airport["location"]} - {$airport["name"]}</option>";
}
?>
</select>
</div>
<div>
<label for="ddate">Departure date:</label>
<input type="text" id="ddate" name="ddate">
</div>
<div>
<label for="dtime">Departure time:</label>
<input type="text" id="dtime" name="dtime">
</div>
<div>
<label for="adate">Arrival Date:</label>
<input type="text" id="adate" name="adate">
</div>
<div>
<label for="atime">Arrival Time:</label>
<input type="text" id="atime" name="atime">
</div>
<br>
<input type="submit" name="submitBtn" value="Add Flight">
</form>
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
