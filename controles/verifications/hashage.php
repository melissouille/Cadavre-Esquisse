<?php
function optimalCost($timeTarget) {
	$cost = 8;
	do {
	    $cost++;
	    $start = microtime(true);
    	password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
    	$end = microtime(true);
	} while (($end - $start) < $timeTarget);
	return $cost;
}

$options = [
	'cost' => optimalCost(0.1),
];
$password = password_hash($password, PASSWORD_BCRYPT, $options);
?>