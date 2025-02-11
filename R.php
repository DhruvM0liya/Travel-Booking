<?php

include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $Fullname = $_POST['Full_name'];
    $Email = $_POST['Email'];
    $Pwd = $_POST['Pwd'];
    $phone = $_POST['phone'];
    $Address = $_POST['Address'];

    $query = "INSERT INTO 'registration' ( 'Full_name', 'Email', 'Pwd', 'phone','Address') VALUES ('$Full_name', '$Email', '$Pwd', '$phone', '$Address')";

    if (mysqli_query($con, $query)) {
        header("location:login.php");
        exit();
    } else {
        echo "Data is not sent";
        echo "Error: " . mysqli_error($con);
    }
}
?>