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
    <li>Home Page</li>
    <li><a href = "Voting/index.php">ACTUALLY VOTING </a></li>
    <li><a href = "zcdcp.php">Incomming Events</a></li>
    <li><a href = "contact.php">Contact</a></li>
    <li><a href = "gallery.php">Gallery</li>
  </ul>
</aside>

<section>
 </div>
 <div id="wtf">   
 <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>

        <a href="reset-password.php" class="RP">Reset Your Password</a>
        <a href="logout.php" class="LT">Sign Out of Your Account</a>
</div>
        <h1><br><br><br>INFORMATIONS</h1>
    <p>TA STRONA TO DEFINICJA NIE-STOSOWANIA CLEAN CODE + pisanie o 2 nad ranem 2 dni bez snu, pozdrawiam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum leo id nibh tincidunt, in malesuada enim pellentesque. <br>
      Nulla pretium, risus id pharetra laoreet, nibh turpis maximus justo, sed rhoncus ligula sem in nisi. Pellentesque eget nisi ac felis dictum aliquam eu et tellus. <br>
      Donec id nisl id urna aliquet rhoncus. Integer a facilisis nibh. Aenean suscipit elit fermentum fermentum pulvinar. <br>
      Curabitur elementum euismod tortor, eu consequat diam fermentum vitae. Ut ex diam, posuere sit amet lacus sed, fringilla sagittis ligula.<br>
       Quisque eget volutpat nibh. Suspendisse vehicula risus leo, nec rhoncus mi venenatis eget. Mauris volutpat mi eu ipsum posuere consequat. <br>
       Vestibulum orci felis, posuere id iaculis eu, consectetur non dui. <br>
       Nam scelerisque dolor dignissim arcu placerat imperdiet. Praesent suscipit ornare nulla. Donec iaculis blandit libero, <br>
      non euismod massa imperdiet nec. Vestibulum bibendum, eros ut interdum rhoncus, metus risus bibendum erat, nec lacinia erat dolor et lacus.<br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum leo id nibh tincidunt, in malesuada enim pellentesque. <br>
      Nulla pretium, risus id pharetra laoreet, nibh turpis maximus justo, sed rhoncus ligula sem in nisi. Pellentesque eget nisi ac felis dictum aliquam eu et tellus. <br>
      Donec id nisl id urna aliquet rhoncus. Integer a facilisis nibh. Aenean suscipit elit fermentum fermentum pulvinar. <br>
      Curabitur elementum euismod tortor, eu consequat diam fermentum vitae. Ut ex diam, posuere sit amet lacus sed, fringilla sagittis ligula.<br>
       Quisque eget volutpat nibh. Suspendisse vehicula risus leo, nec rhoncus mi venenatis eget. Mauris volutpat mi eu ipsum posuere consequat. <br>
       Vestibulum orci felis, posuere id iaculis eu, consectetur non dui. <br>
       Nam scelerisque dolor dignissim arcu placerat imperdiet. Praesent suscipit ornare nulla. Donec iaculis blandit libero, <br>
      non euismod massa imperdiet nec. Vestibulum bibendum, eros ut interdum rhoncus, metus risus bibendum erat, nec lacinia erat dolor et lacus.<br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum leo id nibh tincidunt, in malesuada enim pellentesque. <br>
      Nulla pretium, risus id pharetra laoreet, nibh turpis maximus justo, sed rhoncus ligula sem in nisi. Pellentesque eget nisi ac felis dictum aliquam eu et tellus. <br>
      Donec id nisl id urna aliquet rhoncus. Integer a facilisis nibh. Aenean suscipit elit fermentum fermentum pulvinar. <br>
      Curabitur elementum euismod tortor, eu consequat diam fermentum vitae. Ut ex diam, posuere sit amet lacus sed, fringilla sagittis ligula.<br>
       Quisque eget volutpat nibh. Suspendisse vehicula risus leo, nec rhoncus mi venenatis eget. Mauris volutpat mi eu ipsum posuere consequat. <br>
       Vestibulum orci felis, posuere id iaculis eu, consectetur non dui. <br>
       Nam scelerisque dolor dignissim arcu placerat imperdiet. Praesent suscipit ornare nulla. Donec iaculis blandit libero, <br>
      non euismod massa imperdiet nec. Vestibulum bibendum, eros ut interdum rhoncus, metus risus bibendum erat, nec lacinia erat dolor et lacus.<br></p>
    </section>
    </div>
    <!--TODO: zrobic jebana strone-->
    <h2>WEBSITE IS UNDER CONSTRUCTION!<h2>
  </body>
</html>