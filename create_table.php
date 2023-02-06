<?php
$link = mysqli_connect("localhost", "root", "password", "nist");

if($link === false)
{
    die("Error:- DB could not connected". mysqli_connect_error());
}
else {
    echo "Db connected successfully";
}

$query = "CREATE TABLE student(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE
)";

$result = mysqli_query($link, $query);

if($result)
{
    echo "Table created";
}else{
    echo "Error: could not execute $query mysqli_error($link)";
}

mysqli_close($link);