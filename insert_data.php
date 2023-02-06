<?php
$link = mysqli_connect("localhost", "root", "password", "nist");

if($link === false)
{
    die("Error:- DB could not connected". mysqli_connect_error());
}
else {
    echo "Db connected successfully";
}

$query = "INSERT INTO student(fname, lname, email) VALUES
            ('dulo', 'hulo', 'dulo@fake.com'),
            ('kulo', 'hulo', 'kulo@fake.com'),
            ('fulo', 'mulo', 'fulo@fake.com'),
            ('jhulo', 'tulo', 'jhulo@fake.com')

";

$result = mysqli_query($link, $query);

if($result)
{
    echo "\nData inserted ";
}else{
    echo "Error: could not execute $query mysqli_error($link)";
}

mysqli_close($link);