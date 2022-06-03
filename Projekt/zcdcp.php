<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="IMG/logo.png">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="container">

<aside class="sticky">
  <ul>
    <li><a href="index.php">Home Page</a></li>
    <li><a href = "Voting/index.php">ACTUALLY VOTING </a></li>
    <li>Incomming Events</li>
    <li><a href = "contact.php">Contact</a></li>
    <li><a href = "gallery.php">Gallery</li>
  </ul>
</aside>

<section>
 </div>

 <br><br><br><img src="IMG/zcdcp.png" alt="nie" width="700" height="600">
 <p>ZCDCP</p>



  </body>
</html>