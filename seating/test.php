<?php
require 'connect.inc.php';
$rm="room104";
$q="CREATE TABLE $rm (Rows int,col1 varchar,col2 varchar ,col3  varchar)" ;
mysqli_query($conn,$q);
?>