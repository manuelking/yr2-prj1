<?php
include "header.php";
?>

<?php

//check to see if there are any results
if($flights){
	//loop over the array of films and display their titles
	foreach ($flights as $flight) {
	    echo "<p>";
	    echo "<a href='details.php?id={$flight["id"]}'>";
	    echo $flight['departure_date'];
		echo "</a>";
	    echo "</p>";
	}
}else{
	echo "No records found";
}
include "footer.php";
?>
