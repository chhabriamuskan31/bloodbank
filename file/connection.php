<?php

$servername = "sql200.epizy.com";
$username = "epiz_33401107";
$password = "nvCPb3x5ZnUwl";
$dbname = "epiz_33401107_bloodbank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
    echo "Connection Successful!!!";
}

?>