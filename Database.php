<?php

$host = "localhost";
$db = "nr20190154";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_errno) {
    exit("Konekcija neuspesna: " . $conn->connect_errno);
}
