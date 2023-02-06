<?php
$link = mysqli_connect("localhost", "root", "password", "nist");

if($link === false)
{
    die("Error:- DB could not connected". mysqli_connect_error());
}
else {
    echo "Db connected successfully";
}

$query = "INSERT INTO student(fname, lname, email) VALUES(?,?,?)";

$statement = mysqli_prepare($link, $query);

if($statement)
{
    mysqli_stmt_bind_param($statement, "sss", $fname, $lname, $email);
    $fname="Ram";
    $lname="Sita";
    $email="ram@sita.com";

    mysqli_stmt_execute($statement);

    echo "\t\tData inserted successfully";
}
else
{
    echo "Error: could not execute $query mysqli_error($link)";
}

mysqli_stmt_close($statement);

mysqli_close($link);