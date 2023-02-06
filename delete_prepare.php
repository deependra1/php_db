<?php
$link = mysqli_connect("localhost", "root", "password", "nist");

if($link === false)
{
    die("Error:- DB could not connected". mysqli_connect_error());
}
else {
    echo "Db connected successfully";
}

$query = "DELETE FROM student WHERE id=?";

$statement = mysqli_prepare($link, $query);

if($statement)
{
    mysqli_stmt_bind_param($statement, "i", $id);
    
    $id = 1;

    mysqli_stmt_execute($statement);

    echo "\t\tData Deleted successfully";
}
else
{
    echo "Error: could not execute $query mysqli_error($link)";
}

mysqli_stmt_close($statement);

mysqli_close($link);