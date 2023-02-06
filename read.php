<?php
$link = mysqli_connect("localhost", "root", "password", "nist");

if($link === false)
{
    die("Error:- DB could not connected". mysqli_connect_error());
}
else {
    echo "Db connected successfully";
}

$query = "SELECT * FROM student";

$result = mysqli_query($link, $query);

if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        echo "<br>id    fname   lname   email <br>";
        while($row = mysqli_fetch_array($result))
        {
            echo $row['id']."   ".$row['fname']."   ".$row['lname']."   ".$row['email']."<br>";
        }
        mysqli_free_result($result);
    }
    else{
        echo "No records found";
    }
}
else
{
    echo "Error: could not execute $query mysqli_error($link)";
}

mysqli_close($link);