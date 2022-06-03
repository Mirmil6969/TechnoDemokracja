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
    <link href="contact.css" rel="stylesheet" type="text/css">
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
    <li><a href = "zcdcp.php">Incomming Events</a></li>
    <li>Contact</li>
    <li><a href = "gallery.php">Gallery</a></li>
  </ul>
</aside>

<section>
<h1>FIND US HERE (lol, jokes on u)</h1>
<img src="IMG/map.png" class="mapa" alt="mapa wuteef">
<p>------------------------------------------------------------------------------------------------------------------------------------</p>






<h1>Text to US!</h1>
<form>      
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
<p>------------------------------------------------------------------------------------------------------------------------------------</p>
<h3>You will also find us here!</h3>
<div id="icons">
<p><a href="zcdcp.php"><img src="IMG/fb.png" alt="mapa wuteef"></a><br> Facebook</p>
<p><a href="zcdcp.php"><<img src="IMG/ig.png" alt="mapa wuteef"></a><br> Instagram</p>




</div>
  </body>
</html>