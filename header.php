<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lives Thoughts</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

   <header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Lives Thoughts<span>.</span></a>
            <nav class="navbar">
            <a href="#home" >Home</a>
            <a href="#about" >about</a>
            <a href="#types">types</a>
            <a href="#contact">contact</a>
         <?php 
         require '../admin\config.php';
         if(empty($_SESSION["username"])){
        echo "<a href='registration.php'>Registration</a> or
          <a href='login.php'> Login</a>";
         }
         else{
          echo "<a href='logout.php' class='logout'>logout</a>";
         }
          ?>
        </nav>

        <div class="icons">
            <a href="like.php" class="fas fa-heart"></a>
            <a href="account.php" class="fas fa-user"></a>
        </div>
    </div>
    </header>

  