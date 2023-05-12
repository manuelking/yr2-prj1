<?php
if($_SESSION["role"] === '1'){
	echo "<p>Only admin can access this page<p>";
	echo "</body>";
	echo "</html>";
	exit;
}
?>
