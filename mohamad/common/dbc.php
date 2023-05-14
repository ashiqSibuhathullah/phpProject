<?php
$conn=mysqli_connect("localhost","root","","cars_db")

or

die("mysql couldn't connect-".mysqli_error());

echo"connected successfully";
?>