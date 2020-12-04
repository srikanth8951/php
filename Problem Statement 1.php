<?php

$server = readline('Enter number of server');
$server_load = readline('Enter the server load');

$n = (int)$server;
$array = array_map('intval', explode(' ', $server_load));
foreach($array as &$value) {
     if ($value<50) {
        $n = $n/2;
    }
    else {
         $n = 2*$n+1;
    }
    
}
echo("After 5 minutes,".$n."server is running");
?>