<html>
<head><style>body {text-align:center;}</style></head>
<?php

$ival = 10;
for($i = 0; $i < $ival; $i++) {
	for($j = 0; $j < (2*$i)-1; $j++) echo '*';
	echo "<br>";
}