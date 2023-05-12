<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1959809', 'u1959809', 'ED26may22ed');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
?>
