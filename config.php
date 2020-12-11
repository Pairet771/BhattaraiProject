<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db('shop', $conn);
?>