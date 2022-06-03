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
    <link href="gallery.scss" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="IMG/logo.png">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="container">

<aside class="sticky">
  <ul>
    <li><a href = "index.php">Home Page</li>
    <li><a href = "Voting/index.php">ACTUALLY VOTING </a></li>
    <li><a href = "zcdcp.php">Incomming Events</a></li>
    <li><a href = "contact.php">Contact</a></li>
    <li>Gallery</li>
  </ul>
</aside>
<section>
<h1>C h e e l e r r y</h1>
<p>(funny joke u know, cheems and gallery at same word)<p>
<div class="wrapper">
<div class="media">
<div class="layer">
    <p>1#MLADY <br>CHEEMS</p>
  </div>
<img src="cheems/MLADYY.png" alt="" />
</div>
 <div class="media">
<div class="layer">
    <p>2#Mac&Cheems</p>
  </div>
<img src="cheems/mac.png" alt="" />
</div>
<div class="media">
<div class="layer">
    <p>3#Sakura <br>cheems</p>
  </div>
<img src="cheems/sakuracheems.png" alt="" />
</div>
<br>
<div class="media">
<div class="layer">
    <p>4#CheemsWood</p>
  </div>
<img src="cheems/EW.png" alt="" />
</div>


</div>

</body>
</html>