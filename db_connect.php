<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","matrimony");

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
IF(!$conn)
{
    die("connection failed");
}
?>