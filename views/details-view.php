<?php
include "header.php";
?>
<p><a href="page1.php"><<< Back to list</a></p>
<?php

if($flight){
	echo "<h1>{$flight['id']}</h1>";
	echo "<p>{$flight['id']} is going to {$flight['destination_id']}.</p>";

}else{
	echo "<p>Can't find any records for that Flight.</p>";
}

include "footer.php";
?>
