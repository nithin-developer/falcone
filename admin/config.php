<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME','Nithin');
define('DB_PASSWORD','6364');
define('DB_NAME','falcone');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}

?>