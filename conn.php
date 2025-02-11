<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "book_db";
$con = mysqli_connect("localhost","root","","book_db");
if ($con)
 {
    header ("Location:home.php");
    echo "Connection Ok";
}
else{
    echo "error";
}
?>