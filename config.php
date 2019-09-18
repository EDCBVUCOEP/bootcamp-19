<?php

// godaddy server

$servername = "shareddb-p.hosting.stackcp.net";
$username = "edcbvucoep-31313593b1";
$password = "Edcbvucoe@2020";
$db = "edcbvucoep-31313593b1";

 // localhost server

 // $servername = "localhost";
 // $username = "root";
 // $password = "";
 // $db = "test";

// Create connection
$conn = new mysqli($servername, $username, $password ,$db);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


?>
