<?php

require_once('restKezelo.php');
$restkezelo=new RestKezelo();

echo "<h2>HTTP 200 OK: </h2>";

echo $restkezelo->gethttpStatusUzenet (200). "<br>";

?>