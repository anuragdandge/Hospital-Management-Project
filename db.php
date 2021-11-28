<?php
$host = "localhost";
$user = "root";
$pwd ="";
$db="hospital";
$con = new mysqli($host,$user,$pwd,$db);

if(!$con)
{
    echo "Error : ".$con->connect_error;
}
