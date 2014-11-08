<?php 
error_reporting(E_ALL);

$adresse = "10.0.0.54";
$port = "1227";

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

if( $socket === false ){
	echo "Socket erzeugen gescheitert: " . socket_strerror(socket_last_error()) . "<br>";
}else {
	echo "Socket erzeugt =)<br>";
}

echo "Ich versuche mich jetzt zu verbinden<br>";

$result = socket_connect($socket, $adresse, $port);

if( $result === false ){
	echo "error unso<br>";
} else{
	echo "Verbindung steht...<br>";
}

$in = "00004";
$out = "";

socket_write($socket, $in, strlen($in));

while( $out = socket_read($socket, 16)){
	echo "output<br>";
}

socket_close($socket);
?>