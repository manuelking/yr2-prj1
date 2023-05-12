<?php
session_start();
if(!isset($_SESSION["user"]))
{
	//user tried to access the page without logging in
  //redirect them to the login page
	header( "Location: login.php" );
};
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

<?php
session_destroy();
echo "<p>You've been logged out</p>";
echo "<p><a href='login.php'>Login again</a></p>";
?>


</body>
</html>
