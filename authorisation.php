<?php
if($_SESSION["role"]!==2){
	echo "<p>Only admin can access this page<p>";
	echo "</body>";
	echo "</html>";
	exit;
}
?>

<h1>Admin</h1>
<p>Special admin functions</p>
