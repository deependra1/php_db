<?php
$link = mysqli_connect("localhost", "root", "password");

if($link === false)
{
    die("Error:- DB could not connected". mysqli_connect_error());
}
else {
    echo "Db connected successfully";
}

$query = "CREATE DATABASE nist";

$result = mysqli_query($link, $query);

if($result)
{
    echo "db created";
}else{
    echo "Error: could not execute $query mysqli_error($link)";
}

mysqli_close($link);