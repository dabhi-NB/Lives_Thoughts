
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lives Thoughts admin pannel </title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="../userside\style.css">
    </head>
    <body>
  
  <header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Lives Thoughts admin pannel<span>.</span></a>
            <nav class="navbar">
<?php 
         require 'config.php';
         if(empty($_SESSION["ad_name"])){
        echo "<a href='ad_registration.php'>add admin</a> or
          <a href='ad_login.php'> Login admin</a>";
         }
         else{
          echo "<a href='ad_logout.php' class='logout'>admin logout</a>";
         }
          ?>
        </nav>

        <div class="icons">
            <a href="" class="fas fa-user"></a>
        </div>
    </div>
    </header>
