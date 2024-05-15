<?php
include('header.php');
require '../admin\config.php';
if(!empty($_SESSION["username"])){
    header("location:index.php");
}
if(isset($_POST["submit"])){
    $usernameoremail=$_POST["usernameoremail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"SELECT * FROM login WHERE username='$usernameoremail' OR email='$usernameoremail'");
    $row=mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result)>0){
        if($password==$row['password']){
            $_SESSION["login"]=true;
            $_SESSION["username"]=$row["username"];
            header("location:index.php");
        }
        else{
            echo "<script>alert('wrong password');</script>";
        }
    }
    else{
        echo"<script>alert('user not registered!');</script>";
    }
}
?>

<section class="newpage contact" id="login">
            <h1 class="heading"><span>Login</span>.</h1>
      <div class="row">
      <form class="" action="" method="post" autocomplete="off">
                    <label for="name"> username or email:</label>
                    <input type="text" name="usernameoremail" id="usernameoremail" required class="box">
              
                    <label for="password">password:</label>
                    <input type="password" name="password" id="password" required class="box">
                
                <button type="submit" name="submit" class="btn">login</button>
                <a href="registration.php" class="btn">registration</a>
               <a href="index.php" class="btn">Back</a>
               </div>
        </form>
        </section>
<?php
include('footer.php');
?>