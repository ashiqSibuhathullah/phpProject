<?php
 session_start();
 if(empty($_SESSION['uid']))
 {
 	header("location:index.php");

 }
 $uid=$_SESSION['uid'];
 ?>