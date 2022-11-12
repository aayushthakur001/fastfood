<?php

$conn = new mysqli('localhost', 'root', '', 'fastfood');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>